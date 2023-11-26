<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

Carbon::setLocale('pt_BR');

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
        return Carbon::parse($date)->diffForHumans();
    }

    #[Computed()]
    public function authLastRating()
    {
        if (auth()->check()) {
            $rating = auth()->user()->ratings()->orderBy('created_at', 'desc')->first();

            if ($rating) {
                $returnData = [
                    'rate' => $rating->rate,
                    'rating_date' => Carbon::parse($rating->created_at)->diffForHumans(),
                    'book' => Book::query()->find($rating->book_id, ['id', 'name', 'author', 'summary', 'cover_url']),
                ];
            }
        }

        return $returnData ?? [];
    }

    #[Computed()]
    public function popularBooks()
    {
        return Book::query()->withCount('ratings')->orderByDesc('ratings_count')->limit(4)->get();
    }
}
