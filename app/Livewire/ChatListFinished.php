<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ChatListFinished extends Component
{
    public $isOpen = false;

    #[On('abrirModal')] // Escucha eventos

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.chat-list-finished');
    }
}
