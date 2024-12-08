<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ScheduleVisit extends Component
{

    public $name, $email, $date, $message, $phone;

    public function render()
    {
        return view('livewire.schedule-visit');
    }

    public function contactFormSubmit(): void
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'phone' => 'required|string|max:100',
        ]);

        try {
            $validated['type'] = 'visit';
            Mail::to(config('app.bankers_email'))->send(new ContactMail($validated));

            // Reset form fields
            $this->reset(['name', 'email', 'date', 'message', 'phone']);

            // Provide feedback to the user
            session()->flash('success', 'Thank you for your message. We will get back to you soon!');
        }catch (\Exception $e) {
            Log::critical($e);
            session()->flash('error', 'There was an error sending your message. Please try again later.');
        }

    }
}
