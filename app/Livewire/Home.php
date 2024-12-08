<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Home extends Component
{
    public $name, $email, $subject, $message, $phone, $events;

    public function mount()
    {
        $this->events = \App\Models\Events::query()->where('status', 1)->first();
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function submitHomeForm(): void
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'phone' => 'required|string|max:100',
        ]);

        try {

            Mail::to(config('app.bankers_email'))->send(new ContactMail($validated));

            // Reset form fields
            $this->reset(['name', 'email', 'subject', 'message', 'phone']);

            // Provide feedback to the user
            session()->flash('success', 'Thank you for your message. We will get back to you soon!');
        }catch (\Exception $e) {
            session()->flash('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
