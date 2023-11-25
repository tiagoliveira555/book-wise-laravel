<?php

namespace App\Livewire;

use App\Models\Rating;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public array $ratings = [];

    public function render()
    {
        $ratings = Rating::query()
                        ->orderBy('created_at', 'desc')
                        ->with(['user:id,name,avatar_url', 'book:id,name,author,summary,cover_url'])
                        ->limit(10)
                        ->get();

        return view('livewire.home', [
            $this->ratings = $ratings->toArray(),
        ]);
    }

    public function convertDateForHumans($date)
    {
        Carbon::setLocale('pt_BR');

        return Carbon::parse($date)->diffForHumans();
    }
}
