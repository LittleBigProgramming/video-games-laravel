<div wire:init="loadMostAnticipatedGames" class="most-anticipated-container space-y-10 mt-8">
    @forelse ($mostAnticipatedGames as $game)
        <x-game-card-small :game="$game" />

    @empty
        @foreach(range(1, 4) as $game)
            <x-game-card-small-skeleton-loader />
        @endforeach
    @endforelse
</div>
