<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) >= 3)  {
            $this->searchResults = Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "search \"{$this->search}\";
                fields name, cover.url, slug;
                 limit 8;", 'text/plain'
                )->post(config('services.igdb.games-endpoint'))
                ->json();
        }

        return view('livewire.search-dropdown');
    }
}
