<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Explore')]
class Explore extends Component
{
    public ?Book $book = null;

    public bool $assessment = false;

    #[Rule(['required', 'min:5', 'max:450'])]
    public string $description = '';

    #[Rule(['required', 'integer', 'between:1,5'])]
    public int $rate = 0;

    public string $search = '';

    public string $filterCategory = '';

    public function render()
    {
        return view('livewire.explore', [
            'books' => Book::query()
                ->where('name', 'like', "%{$this->search}%")
                ->whereHas('categories', fn ($query) => $query->where('name', 'like', "%{$this->filterCategory}%"))
                ->get(),
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

    public function toggleArea()
    {
        $this->assessment = !$this->assessment;
    }
}
