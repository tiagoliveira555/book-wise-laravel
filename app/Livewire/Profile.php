<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;

class Profile extends Component
{
    #[Url()]
    public ?string $id = '';

    public ?User $user = null;

    public function render()
    {
        if ($this->id) {
            $this->user = User::find($this->id)->load('ratings');
        }

        return view('livewire.profile');
    }
}
