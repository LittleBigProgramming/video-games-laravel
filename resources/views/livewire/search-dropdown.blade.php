<div class="relative" x-data="{ isVisible: true}" @click.away="isVisible = false">
    <input
        wire:model.debounce.300ms="search"
        type="text"s
        class="bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline"
        placeholder="Search (Press / to focus)"
        x-ref="search"
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isVisible = true"
        @keydown.escape.window = "isVisible = false"
        @keydown = "isVisible = true"
        @keydown.shift.tab = "isVisible = false"
    >

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3" style="position: absolute;"></div>

    @if (strlen($search) >= 3)
        <div
            class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2 transition ease-in-out duration-300"
            x-show.transition.opacity.duration.300="isVisible">
            @if (count($searchResults) > 0)
                 <ul>
                    @foreach ($searchResults as $game)
                        <li class="border-b border-gray-700">
                            <a
                                href="{{ route('games.show', $game['slug']) }}"
                                class="block hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                @if ($loop->last) @keydown.tab = "isVisible = false" @endif
                            >
                                @if (isset($game['cover']))
                                    <img
                                        src="{{ $game['cover']['url'] }}"
                                        alt="Game Cover"
                                        class="w-12"
                                    >
                                @else
                                    <img
                                        src="https://via.placeholder.com/264x352"
                                        alt="Game Cover"
                                        class="w-12"
                                    >
                                @endif
                                <span class="ml-4">{{ $game['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No Results For {{ $search }}</div>
            @endif
        </div>
    @endif
</div>
