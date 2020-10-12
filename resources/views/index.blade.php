@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-400 uppercase tracking-wide font-semibold">Popular Items</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-700 pb-8 pt-4">
            @foreach ($popularGames ?? '' as $game)
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        @if (isset($game['rating']))
                            <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    {{ round($game['rating']).'%' }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-400 mt-1">
                        @foreach ($game['platforms'] as $platform)
                            @if (array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation'] }} |
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @foreach ($recentlyReviewedGames ?? '' as $game)
                        <div class="item bg-gray-700 rounded-large shadow-md flex p-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
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
                                    {{ $game['name'] }}
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
                    @endforeach
                </div>
            </div>
            <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="item flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Item Title</a>
                            <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                        </div>
                    </div>
                    <div class="item flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Item Title</a>
                            <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                        </div>
                    </div>
                    <div class="item flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Item Title</a>
                            <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                        </div>
                    </div>
                    <div class="item flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Item Title</a>
                            <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                        </div>
                    </div>
                    <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Most Anticipated</h2>
                    <div class="most-anticipated-container space-y-10 mt-8">
                        <div class="item flex">
                            <a href="#">
                                <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Item Title</a>
                                <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                            </div>
                        </div>
                        <div class="item flex">
                            <a href="#">
                                <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Item Title</a>
                                <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                            </div>
                        </div>
                        <div class="item flex">
                            <a href="#">
                                <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Item Title</a>
                                <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                            </div>
                        </div>
                        <div class="item flex">
                            <a href="#">
                                <img src="https://via.placeholder.com/500x750" alt="" class="w-24 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Item Title</a>
                                <div class="text-gray-400 text-sm mt-1">Dec 25, 2020</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
