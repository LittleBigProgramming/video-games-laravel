<div wire:init="loadRecentlyReviewedGames" class="recently-reviewed-container space-y-12 mt-8">
    @forelse ($recentlyReviewedGames ?? '' as $game)
        <div class="item bg-gray-700 rounded-large shadow-md flex p-6">
            <div class="relative flex-none">
                @if (isset($game['cover']))
                    <a href="#">
                        <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                @endif
                @if (isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']).'%' }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="ml-12">
                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-8">
                    {{ $game['name'] ?? '' }}
                </a>
                <div class="text-gray-400 mt-1">
                    @foreach ($game['platforms'] as $platform)
                        @if (array_key_exists('abbreviation', $platform))
                            {{ $platform['abbreviation'] }} |
                        @endif
                    @endforeach
                </div>
                <div class="mt-6 text-gray-400 hidden md:block">
                    {{ $game['summary'] }}
                </div>
            </div>
        </div>
    @empty

        @foreach(range(1, 3) as $game)
            <div class="item bg-gray-700 rounded-large shadow-md flex p-6 pt-1">
                <div class="relative flex-none">
                    <div class="bg-gray-600 w-32 lg:w-48 h-40 lg:h-56">
                        <div class="spinner my-8 p-6"></div>
                    </div>
                </div>
                <div class="ml-12">
                    <div class="inline-block text-lg font-semibold leading-tight text-transparent  bg-gray-600 mt-8">
                        Title goes here
                    </div>
                    <div class="mt-8 space-y-4 hidden md:block">
                        <span class="text-transparent bg-gray-600 inline-block">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor.
                        </span>
                        <span class="text-transparent bg-gray-600 inline-block">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum.
                        </span>
                        <span class="text-transparent bg-gray-600 inline-block">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem.
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>