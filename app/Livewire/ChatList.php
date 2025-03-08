<?php

namespace App\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    public function abrirModal()
    {
        $this->dispatch('abrirModal'); // Emite un evento
    }
    public function render()
    {
        return view('livewire.chat-list');
    }
}
