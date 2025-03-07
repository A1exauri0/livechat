<?php

namespace App\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $nombre;

    //se inicializa el valor de la variable nombre
    public function mount()
    {
        $this->nombre = "";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }
}
