<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Layout('layouts.guest')]
    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }
}
