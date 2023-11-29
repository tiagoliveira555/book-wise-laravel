<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Explore extends Component
{
    public ?Book $book = null;

    public bool $assessment = false;

    #[Rule(['required', 'min:5', 'max:255'])]
    public string $description = '';

    #[Rule(['required', 'integer', 'between:1,5'])]
    public int $rate = 0;

    public function render()
    {
        return view('livewire.explore', [
            'books' => Book::query()->get(),
        ]);
    }

    public function saveRating()
    {
        $this->validate();

        Rating::query()->create([
            'rate' => $this->rate,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
            'book_id' => $this->book->id,
        ]);

        $this->reset('description', 'rate', 'assessment');
    }

    public function setBook(Book $book)
    {
        $this->book = $book;
    }

    public function convertCategories($categories)
    {
        $categoryNames = $categories->pluck('name')->toArray();

        return implode(', ', $categoryNames);
    }

    public function convertDateForHumans(string $date): string
    {
        Carbon::setLocale('pt_BR');

        return Carbon::parse($date)->diffForHumans();
    }

    public function toggleArea()
    {
        $this->assessment = !$this->assessment;
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
