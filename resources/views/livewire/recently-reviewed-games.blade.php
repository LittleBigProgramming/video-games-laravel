<div wire:init="loadRecentlyReviewedGames" class="recently-reviewed-container space-y-12 mt-8">
    @forelse ($recentlyReviewedGames ?? '' as $game)
        <x-game-card-recently-reviewed :game="$game" />
    @empty

        @foreach(range(1, 3) as $game)
            <x-game-card-recently-reviewed-skeleton />
        @endforeach
    @endforelse
</div>
