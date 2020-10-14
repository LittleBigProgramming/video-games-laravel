<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $afterFourMonth = Carbon::now()->addMonths(4)->timestamp;
        $current = Carbon::now()->timestamp;

        $popularGames = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating;
                    where platforms = (48,49,130,6)
                    & ( first_release_date > {$before}
                    & first_release_date < {$after});
                    sort popularity desc; limit 20;"
            ])->get('https://api-v3.igdb.com/games')
            ->json();

        $recentlyReviewedGames = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
                    where platforms = (48,49,130,6)
                    & ( first_release_date > {$before}
                    & first_release_date < {$current}
                    & rating_count > 5);
                    sort popularity desc; limit 3;"
            ])->get('https://api-v3.igdb.com/games')
            ->json();

        $mostAnticipated = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
                    where platforms = (48,49,130,6)
                    & ( first_release_date > {$current}
                    & first_release_date < {$afterFourMonth});
                    sort popularity desc;
                    limit 4;"
            ])->get('https://api-v3.igdb.com/games')
            ->json();

        $comingSoon = Http::withHeaders(config('services.igdb'))
            ->withOptions([
                'body' => "
                    fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary;
                    where platforms = (48,49,130,6)
                    & ( first_release_date >= {$current});
                    sort first_release_date asc;
                    limit 4;"
            ])->get('https://api-v3.igdb.com/games')
            ->json();

        return view('index', [
            'popularGames' => $popularGames,
            'recentlyReviewedGames' => $recentlyReviewedGames,
            'mostAnticipated' => $mostAnticipated,
            'comingSoon' => $comingSoon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
