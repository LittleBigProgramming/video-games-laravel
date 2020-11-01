<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;


class ComingSoonGames extends Component
{
    public $comingSoonGames = [];

    public function loadComingSoonGames()
    {
        $current = Carbon::now()->timestamp;

        $comingSoonGamesUnformatted = Cache::remember('coming-soon-games', 300, function () use ($current) {
            return Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
                        where platforms = (48,49,130,6)
                        & (first_release_date >= {$current}
                        );
                        sort first_release_date asc;
                        limit 4;
                    ", "text/plain"
                )->post(config('services.igdb.games-endpoint'))
                ->json();
        });

        $this->comingSoonGames = $this->formatForView($comingSoonGamesUnformatted);

    }

    public function render()
    {
        return view('livewire.coming-soon-games');
    }

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
