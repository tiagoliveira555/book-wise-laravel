<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Url;
use Livewire\Component;

class Profile extends Component
{
    #[Url()]
    public ?string $id = '';

    public ?User $user = null;

    public string $bookFilter = '';

    public function render()
    {
        $user = User::find($this->id);

        if (auth()->check() && $this->id === '') {
            $this->user = auth()->user();
        } elseif (auth()->check() && $user || !auth()->check() && $user) {
            $this->user = $user;
        } else {
            $this->redirect('/', navigate: true);
        }

        return view('livewire.profile');
    }

    public function convertDateForHumans(string $date): string
    {
        Carbon::setLocale('pt_BR');

        $humanDate = Carbon::parse($date)->diffForHumans();

        return ucfirst($humanDate);
    }

    public function getYear($date)
    {
        return Carbon::parse($date)->year;
    }

    public function getCountReadingPage($user)
    {
        $count = 0;

        foreach ($user->ratings as $rating) {
            $count += $rating->book->total_pages;
        }

        return $count;
    }

    public function getCountAvaliabledBooks($user)
    {
        return count($user->ratings);
    }

    public function getMostCategory($user)
    {
        $categories = collect();

        foreach ($user->ratings as $rating) {
            foreach ($rating->book->categories as $category) {
                $categories->push($category->name);
            }
        }

        return $categories->countBy(fn ($category) => $category)->sortDesc()->keys()->first() ?? 'Sem categorias';
    }

    public function searchBook($user)
    {
        $ratingsFilter = $user->ratings()
        ->whereHas('book', function ($query) {
            $query->where('name', 'like', "%{$this->bookFilter}%");
        })
        ->orderBy('created_at', 'desc')
        ->get();

        return $ratingsFilter;
    }
}
