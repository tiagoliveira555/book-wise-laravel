<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Explore extends Component
{
    public mixed $books = [];

    public function render()
    {
        return view('livewire.explore', [
            $this->books = Book::query()->with('categories')->get(),
        ]);
    }
}
