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
            'rate' => 4,
            'description' => $this->description,
            'user_id' => auth()->user()->id,
            'book_id' => $this->book->id,
        ]);

        $this->reset('description', 'assessment');
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
}
