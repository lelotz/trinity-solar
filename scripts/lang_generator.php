<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

require __DIR__ . '/../vendor/autoload.php'; // Include Composer's autoloader



interface TranslatorInterface{

    public function translate(string $string,  string $sourceLanguage, string $targetLanguage): string;

}

interface HttpClientInterface{

    public function get($uri,array $options = [] ): ResponseInterface;

    public function isConnected(): bool;
}


class GuzzleHttpClient implements HttpClientInterface{

    public function __construct(protected $client  = new GuzzleHttp\Client())
    {
        $this->isConnected();
    }

    /**
     * @throws GuzzleException
     */
    public function get($uri, array $options = []): ResponseInterface
    {
        return $this->client->get($uri, $options);
    }

    public function isConnected(): bool
    {
        try {
            $response = $this->client->get('https://www.google.com');

            // If the request is successful (status code 200), the internet connection is likely working.
            if ($response->getStatusCode() === 200) {
                dump("Connection established");
            } else {
                dump("Faulty Connection established");

            }
            return true;
        } catch (RequestException $e) {
            // If an exception is thrown, it typically indicates a problem with the internet connection.
            dump("Failed to establish connection: " .$e->getMessage());

            exit();
        } catch (GuzzleException $e) {
            dump("Failed to establish connection with Guzzle : " .$e->getMessage());
            exit();
        }
    }
}

class MyMemoryTranslator implements TranslatorInterface{

    public float $min_quality = 1;
    public int $max_retries = 3;

    public int $retry_delay = 1000;

    public int $current_retry = 0;
    public function __construct(
        protected $client  = new GuzzleHttpClient(),
        protected array $api_config = [
            'key'=>'16546924942e12058444',
            'username'=>'olomidereck@hotmail.com',
            'endpoint'=>'https://api.mymemory.translated.net/get']
    )
    {

    }

    public function translate(
        string $string, string $sourceLanguage, string $targetLanguage,): string
    {
        try {
            $response = $this->client->get(
                $this->api_config['endpoint']
                .'?q='.$string
                .' &langpair='.$sourceLanguage.'|'.$targetLanguage
                .'&key='.$this->api_config['key']
                .'&de='.$this->api_config['username']
            );
            $responseData =(json_decode($response->getBody()->getContents()))->responseData;


            // Get a better translation if the quality is low
            if(($responseData->match < $this->min_quality) && $this->current_retry < $this->max_retries){
                $this->current_retry++;
                return $this->translate($string, $sourceLanguage, $targetLanguage);
            }

            return $responseData->translatedText;
        }catch (Throwable  $e){
            logger('Translator Error: '.$e->getMessage());
        }
        return  $string;
    }
}

class LangFileGenerator{

    public function __construct(

        protected TranslatorInterface $translator = new MyMemoryTranslator(),
        public $outputLangDirectory ='',
        public $sourceLanguage = 'en',
        public $targetLanguage = 'sw',
        public $pathToLanguageFiles = __DIR__ . '/../lang/en/nav.php',

    )
    {
        if(strlen($this->outputLangDirectory)<=1){
            $this->outputLangDirectory = __DIR__ . '/../lang/' . $this->targetLanguage;
        }
        if(!file_exists($this->pathToLanguageFiles)){
            exit("Source file does not exist : " . $this->pathToLanguageFiles);
        }
        dump("Translating from source lang " . $this->sourceLanguage . " with source file : ". basename($this->pathToLanguageFiles));


    }

    protected function translateData(mixed $data): array
    {

        try {
            $translatedData = [];
            foreach ($data as $key => $value) {
                if(is_array($value)){

                    dump('--> ' . $key . PHP_EOL);
                    $translatedData[$key] = $this->translateData($value);
                    dump('<-- ' . $key . PHP_EOL);
                }else{

                    $translatedValue  = $this->translator->translate(
                        string : $value,
                        sourceLanguage: $this->sourceLanguage,
                        targetLanguage: $this->targetLanguage);

                    $translatedData[$key] = $translatedValue;
                    dump(strtoupper($this->sourceLanguage). ' : ' . $value);
                    dump(strtoupper($this->targetLanguage). ' : ' . $translatedValue . '<pre>');

                }


            }
        }catch (Throwable $e){
            print_r('TRANSLATION ERROR LINE['. $e->getLine().'] : '. $e->getMessage() . $e->getPrevious());
        }
        // Clear the line

        return $translatedData;
    }

    /**
     * @param mixed $filename
     * @param array $translatedData
     * @return void
     */
    protected function saveData(mixed $filename, array $translatedData): void
    {

        try {
            // If the target language subdirectory doesn't exist, create it
            if (!is_dir($this->outputLangDirectory)) {
                mkdir($this->outputLangDirectory);
            }

            // Save the translated data to the appropriate file in the target language subdirectory
            $outputFilePath = $this->outputLangDirectory . DIRECTORY_SEPARATOR . $filename;

            file_put_contents($outputFilePath, '<?php return ' . var_export($translatedData, true) . ';');

        } catch (Throwable $e) {
            print_r('SAVE ERROR : '.$e->getMessage()  . PHP_EOL);
        }
    }

    public function translateFile(): void{
        if(str_contains($this->pathToLanguageFiles, '.') && pathinfo($this->pathToLanguageFiles, PATHINFO_EXTENSION) === 'php'){
            $data = require $this->pathToLanguageFiles;

            $translatedData = $this->translateData($data);
            $basename = basename($this->pathToLanguageFiles);

            $this->saveData($basename, $translatedData);
        }else{
            foreach (scandir($this->pathToLanguageFiles) as $filename) {
                if (str_contains($filename, '.') && pathinfo($filename, PATHINFO_EXTENSION) === 'php') {
                    $filePath = $this->pathToLanguageFiles . DIRECTORY_SEPARATOR . $filename;
                    $data = require $filePath;

                    $translatedData = $this->translateData($data);
                    $this->saveData($filename, $translatedData);

                }else{
                    print_r('FILES NOT FOUND : '.$filename . PHP_EOL);
                }
            }
        }
    }



}


if ($argc < 1) {
    die("Usage: php lang_generator.php <filename> \n");
}

$translator = new LangFileGenerator(
    sourceLanguage: 'en',
    targetLanguage: 'sw',
    pathToLanguageFiles: __DIR__ . '/../lang/en/'.$argv[1].'.php');

$translator->translateFile();


