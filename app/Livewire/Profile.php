<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;

class Profile extends Component
{
    #[Url()]
    public $id;

    public ?User $user = null;

    public function render()
    {
        $this->user = User::find($this->id);

        return view('livewire.profile');
    }
}
