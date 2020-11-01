<div wire:init="loadComingSoonGames" class="most-anticipated-container space-y-10 mt-8 mb-8">
    @forelse ($comingSoonGames as $game)
        <div class="item flex">
            @if (isset($game['coverImageUrl']))
                <a href="#">
                    <img src="{{ $game['coverImageUrl'] }}" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                </a>
            @endif
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{ $game['releaseDate'] }}
                </div>
            </div>
        </div>
    @empty
        @foreach(range(1, 4) as $game)
            <div class="game flex">
                <div class="bg-gray-700 w-16 h-20 flex-none">
                    <div class="spinner my-8 p-6"></div>
                </div>
                <div class="ml-4">
                    <div class="text-transparent bg-gray-700 leading-tight">Title goes here today</div>
                    <div class="text-transparent bg-gray-700 inline-block text-sm mt-2">Sept 14, 2020</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>