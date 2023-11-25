<?php

namespace App\Livewire;

use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Home extends Component
{
    public mixed $ratings = [];

    public function render(): View
    {
        return view('livewire.home', [
            $this->ratings = $this->getLastTenRatings(),
        ]);
    }

    private function getLastTenRatings()
    {
        return Rating::query()
        ->orderBy('created_at', 'desc')
        ->with(['user:id,name,avatar_url', 'book:id,name,author,summary,cover_url'])
        ->limit(10)
        ->get();
    }

    public function convertDateForHumans(string $date): string
    {
        Carbon::setLocale('pt_BR');

        return Carbon::parse($date)->diffForHumans();
    }
}
