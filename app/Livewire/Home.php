<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Home extends Component
{
    public function render(): View
    {
        return view('livewire.home', [
            'ratings' => $this->getLastTenRatings(),
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

    #[Computed()]
    public function authLastRating()
    {
        if (auth()->check()) {
            $rating = auth()->user()->ratings()->orderBy('created_at', 'desc')->first();

            if ($rating) {
                $returnData = [
                    'rate' => $rating->rate,
                    'rating_date' => $this->convertDateForHumans($rating->created_at),
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

    public function ratingAverage($ratings)
    {
        $ratingsCount = count($ratings);
        $ratingSum = 0;

        foreach ($ratings as $rating) {
            $ratingSum += $rating->rate;
        }

        return round($ratingSum / $ratingsCount);
    }
}
