<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class RecentlyReviewedGames extends Component
{
    public $recentlyReviewedGames = [];

    public function loadRecentlyReviewedGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $recentlyReviewedGamesUnformatted = Cache::remember('recently-reviewed-games', 300, function () use($before, $current) {
            return Http::withHeaders(config('services.igdb.headers'))
                ->withBody(
                    "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$before}
                    & first_release_date < {$current}
                    & rating_count > 5);
                    sort total_rating_count desc;
                    limit 3;
                ", "text/plain"
                )->post(config('services.igdb.games-endpoint'))
                ->json();
        });

        $this->recentlyReviewedGames = $this->formatForView($recentlyReviewedGamesUnformatted);
    }

    public function render()
    {
        return view('livewire.recently-reviewed-games');
    }

    private function formatForView(array $games)
    {
        return collect($games)->map(function (array $game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) . '%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
}
