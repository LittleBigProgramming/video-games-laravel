<div class="item bg-gray-700 rounded-large shadow-md flex p-6">
    <div class="relative flex-none">
        @if (isset($game['coverImageUrl']))
            <a href="{{ route('games.show', $game['slug']) }}">
                <img src="{{ $game['coverImageUrl'] }}" alt="" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
            </a>
        @endif
        @if (isset($game['rating']))
            <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                <div class="font-semibold text-xs flex justify-center items-center h-full">
                    {{ $game['rating'] }}
                </div>
            </div>
        @endif
    </div>
    <div class="ml-12">
        <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
            {{ $game['name'] ?? '' }}
        </a>
        <div class="text-gray-400 mt-1">
            {{ $game['platforms'] }}
        </div>
        <div class="mt-6 text-gray-400 hidden md:block">
            {{ $game['summary'] }}
        </div>
    </div>
</div>
