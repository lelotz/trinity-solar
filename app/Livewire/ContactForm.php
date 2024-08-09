<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function sendMessage()
    {
        $this->validate();

        // Send email to admin
        Mail::send('emails.admin', [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ], function($mail) {
            $mail->to('info@trinitysolar.co.tz')
                 ->subject('New Contact Form Submission');
        });

        // Send confirmation email to user
        Mail::send('emails.user', [
            'name' => $this->name,
            'subject' => $this->subject,
            'message' => $this->message,
        ], function($mail) {
            $mail->to($this->email)
                 ->subject('Thank you for contacting us');
        });

        // Reset form fields and set success message
        $this->reset(['name', 'email', 'subject', 'message']);
        $this->successMessage = 'Your message has been sent successfully!';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
