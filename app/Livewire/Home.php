<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
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

    #[Computed()]
    public function authLastRating()
    {
        if (auth()->check()) {
            /**
             * @var user $user
             */
            $user = auth()->user();

            $rating = $user->ratings()->orderBy('created_at', 'desc')->first();

            if ($rating) {
                $returnData = [
                    'rate' => $rating->rate,
                    'rating_date' => $rating->created_at->diffForHumans(),
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
