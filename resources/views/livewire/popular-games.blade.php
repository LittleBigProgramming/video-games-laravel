<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-700 pb-8 pt-4">
    @forelse ($popularGames ?? '' as $game)
        <x-game-card :game="$game" />

    @empty
        @foreach (range(1, 12) as $game)
            <div class="game mt-4">
                <div class="relative inline-block">
                    <div class="bg-gray-700 w-48 h-56">
                        <div class="spinner my-8 p-6"></div>
                    </div>
                </div>
                <div class="block text-transparent text-lg bg-gray-700 leading-tight mt-3">
                    Title goes here
                </div>
                <div class="inline-block text-transparent bg-gray-700 mt-4">PS4, PC, Switch</div>
            </div>
        @endforeach
    @endforelse
</div>
