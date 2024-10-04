<?php

namespace App\Livewire;

use Livewire\Component;

class Download extends Component
{
    public $type = null;

    public function mount($type = null): void
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.download');
    }
}
