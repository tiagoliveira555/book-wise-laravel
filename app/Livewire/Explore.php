<?php

namespace App\Livewire;

use App\Models\Book;
use Carbon\Carbon;
use Livewire\Component;

class Explore extends Component
{
    public ?Book $book = null;

    public function render()
    {
        return view('livewire.explore', [
            'books' => Book::query()->get(),
        ]);
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
}
