<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 30, function () use($before, $after) {
            return Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation,
                     rating, slug;
                where platforms = (48,49,130,6)
                & ( first_release_date > {$before}
                & first_release_date < {$after}
                & total_rating_count > 5);
                sort total_rating_count desc;
                 limit 20;", 'text/plain'
                )->post(config('services.igdb.games-endpoint'))
                ->json();
        });

        $this->popularGames = $this->formatForView($popularGamesUnformatted);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.popular-games');
    }

    /**
     * @param array $games
     * @return array
     */
    private function formatForView(array $games)
    {
        return collect($games)->map(function (array $game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
}
