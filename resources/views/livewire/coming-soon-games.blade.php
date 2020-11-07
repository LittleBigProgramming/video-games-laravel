<div wire:init="loadComingSoonGames" class="most-anticipated-container space-y-10 mt-8 mb-8">
    @forelse ($comingSoonGames as $game)
        <x-game-card-small :game="$game" />

    @empty
        @foreach(range(1, 4) as $game)
            <x-game-card-small-skeleton-loader />
        @endforeach
    @endforelse
</div>
