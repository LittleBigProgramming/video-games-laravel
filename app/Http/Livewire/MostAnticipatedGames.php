<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;


class MostAnticipatedGames extends Component
{
    public $mostAnticipatedGames = [];

    public function loadMostAnticipatedGames()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMonth = Carbon::now()->addMonths(4)->timestamp;

        $mostAnticipatedGamesUnformatted = Cache::remember('most-anticipated-games', 300, function () use($current, $afterFourMonth) {
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

        $this->mostAnticipatedGames = $this->formatForView($mostAnticipatedGamesUnformatted);
    }

    public function render()
    {
        return view('livewire.most-anticipated-games');
    }

    /**
     * @param array $games
     * @return array
     */
    private function formatForView(array $games)
    {
        return collect($games)->map(function (array $game) {
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) : null,
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('M d, Y')
            ]);
        })->toArray();
    }
}
