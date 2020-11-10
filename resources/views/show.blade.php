@extends('layouts.app')

@section('title', $game['name'])
@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-700 pb-6 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{  $game['coverImageUrl'] }}" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-2">{{ $game['name'] }}</h2>
                <div class="text-gray-400">
                    <span>
                        {{ $game['genres'] }}
                    </span>
                    &middot;
                    <span>{{ $game['involvedCompanies'] }}</span>
                    &middot;
                    <span>
                        {{ $game['platforms'] }}
                    </span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $game['memberRating'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $game['criticRating'] }}
                            </div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 md:ml-8 lg:mt-0 lg:ml-12">
                        @if ($game['social']['website'])
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="{{ $game['social']['website']['url'] }}" class="hover:text-gray-400"><i class="fas fa-external-link-square-alt fa-lg"></i></a>
                            </div>
                        @endif
                        @if ($game['social']['instagram'])
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="{{ $game['social']['instagram']['url'] }}" class="hover:text-gray-400"><i class="fab fa-instagram-square fa-lg"></i></a>
                            </div>
                        @endif
                        @if ($game['social']['twitter'])
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="{{ $game['social']['twitter']['url'] }}" class="hover:text-gray-400"><i class="fab fa-twitter-square fa-lg"></i></a>
                            </div>
                        @endif
                        @if ($game['social']['facebook'])
                            <div class="w-12 h-12 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="{{ $game['social']['facebook']['url'] }}" class="hover:text-gray-400"><i class="fab fa-facebook-square fa-lg"></i></a>
                            </div>
                        @endif
                    </div>

                    <p class="mt-12 mr-64">
                        {{ $game['summary'] }}
                    </p>

                    <div class="mt-12">
                        <a href="{{ $game['trailer'] }}" target="_blank" class="inline-flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="images-container border-b border-gray-700 pb-12 mt-12">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Screenshots</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                @foreach ($game['screenshots'] as $screenshot)
                    <div>
                        <a href="{{ $screenshot['huge']  }}">
                            <img src="{{ $screenshot['big'] }}" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="similar-games-container pb-6 mt-12">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-700 pb-8 pt-4">
                @foreach ($game['similarGames'] as $game)
                    <x-game-card :game="$game" />
                @endforeach
            </div>
        </div>
@endsection
