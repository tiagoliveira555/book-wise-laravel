<?php

namespace App\Livewire;

use Livewire\Component;

class Aside extends Component
{
    public string $page;

    public function render()
    {
        $this->page = $this->getPage(url()->current());

        return view('livewire.aside');
    }

    private function getPage($url)
    {
        $url = parse_url($url);
        if (isset($url['path'])) {
            return trim($url['path'], '/');
        } else {
            return '/';
        }
    }
}
