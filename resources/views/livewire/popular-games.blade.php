<div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-700 pb-8 pt-4">
    @forelse ($popularGames ?? '' as $game)
        <div class="game mt-4">
            <div class="relative inline-block">
                @if (isset($game['cover']))
                    <a href="#">
                        <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                @endif
                @if (isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']).'%' }}
                        </div>
                    </div>
                @endif
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] ?? '' }}
            </a>
            <div class="text-gray-400 mt-1">
                @foreach ($game['platforms'] as $platform)
                @if (array_key_exists('abbreviation', $platform))
                {{ $platform['abbreviation'] }} |
                @endif
                @endforeach
            </div>
        </div>

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