<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $title = '';
    public $description = '';

    public function mount()
    {
        $this->title       = 'Introduction';
        $this->description = 'Build reactive apps easily using PHP and less JavaScript.';
    }

    public function render()
    {
        return view('livewire.hello');
    }
}
