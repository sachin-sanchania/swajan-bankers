<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Gallery extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = \App\Models\Gallery::query()->orderBy('order')->get();
    }
    public function render()
    {
        return view('livewire.gallery');
    }

    public function rendered()
    {
        $this->dispatch('initializeMagnificPopup');
    }
}
