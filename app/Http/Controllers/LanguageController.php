<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $locale = $request->input('locale'); // Get the selected locale from the form

        if (in_array($locale, ['en', 'sw'])) {
            session(['language'=>$locale]);
        }else{
            logger('locale not supported : ' .$locale);
            return view('404'); // If the locale is not supported, return a 404 error
        }
        return redirect()->back(); // Redirect back to the previous page
    }
}
