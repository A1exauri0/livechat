<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $mensaje;

    public function increment()
    {
        $this->count++;
    }

    public function mount()
    {
        $this->mensaje = "";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
