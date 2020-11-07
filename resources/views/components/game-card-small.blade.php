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
