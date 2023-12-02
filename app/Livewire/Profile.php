<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Url;
use Livewire\Component;

class Profile extends Component
{
    #[Url()]
    public ?string $id = '';

    public ?User $user = null;

    public function render()
    {
        $user = User::find($this->id);

        if (auth()->check() && $this->id === '') {
            $this->user = auth()->user();
        } elseif (auth()->check() && $user) {
            $this->user = $user;
        } else {
            $this->redirect('/', navigate: true);
        }

        return view('livewire.profile');
    }

    public function convertDateForHumans(string $date): string
    {
        Carbon::setLocale('pt_BR');

        $humanDate = Carbon::parse($date)->diffForHumans();

        return ucfirst($humanDate);
    }
}
