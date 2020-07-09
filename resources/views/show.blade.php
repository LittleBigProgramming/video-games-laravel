@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-700 pb-6 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="https://via.placeholder.com/300x550" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-2">Amazing Game Title</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Publisher</span>
                    &middot;
                    <span>Platform</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-700 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-700 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">75%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 md:ml-8 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">a</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">b</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">c</a>
                        </div>
                        <div class="w-8 h-8 bg-gray-700 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">d</a>
                        </div>
                    </div>

                    <p class="mt-12 mr-64">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at consequuntur culpa
                        doloribus error harum laborum nam perspiciatis quaerat quibusdam quis quos, repellendus saepe similique!
                    </p>

                    <div class="mt-12">
                        <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="images-container border-b border-gray-700 pb-12 mt-12">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Image</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="https://via.placeholder.com/300x300" alt="cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>

        <div class="similar-games-container pb-6 mt-12">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-700 pb-8 pt-4">
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
                <div class="game mt-4">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://via.placeholder.com/500x750" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-12 h-12 bg-gray-700 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Item Title
                    </a>
                    <div class="text-gray-400 mt-1">
                        Category
                    </div>
                </div>
            </div>
        </div>
@endsection
