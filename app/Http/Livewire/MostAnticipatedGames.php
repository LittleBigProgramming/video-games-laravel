<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class MostAnticipatedGames extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMonth = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipatedGames = Cache::remember('most-anticipated-games', 300, function () use($current, $afterFourMonth) {
            return Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$current}
                    & first_release_date < {$afterFourMonth}
                    );
                    sort total_rating_count desc;
                    limit 4;", "text/plain"
                )->post(config('services.igdb.games-endpoint'))
                ->json();
        });
    }

    public function render()
    {
        return view('livewire.most-anticipated-games');
    }
}
