<?php

namespace App\Http\Livewire;

use App\Mail\ContactForm as MailContactForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $state = [];

    protected $rules = [
        'state.name' => ['required', 'string'],
        'state.email' => ['required', 'email'],
        'state.body' => ['required', 'string', 'max:2000']
    ];

    protected $validationAttributes = [
        'state.name' => 'name',
        'state.email' => 'email address',
        'state.body' => 'body',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to(config('contact.form.to'))->send(new MailContactForm(
            $this->state['name'],
            $this->state['email'],
            $this->state['body']
        ));

        session()->flash('messageSent', __('Your message is successfully sent. We will answer you as soon as possible.'));
        $this->reset('state');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
