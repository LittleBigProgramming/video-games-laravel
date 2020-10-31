@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-400 uppercase tracking-wide font-semibold">Popular Items</h2>
        <livewire:popular-games>
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <livewire:recently-reviewed-games>
            </div>
            <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Coming Soon</h2>
                <livewire:coming-soon-games>
                <h2 class="h2 text-blue-uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <livewire:most-anticipated-games>
            </div>
        </div>
    </div>
@endsection
