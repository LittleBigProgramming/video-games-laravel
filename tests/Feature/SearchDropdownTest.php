<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use App\Http\Livewire\RecentlyReviewedGames;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearchbarInputSearchesForGames()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSearchGames()
        ]);

        Livewire::test(SearchDropdown::class)
            ->assertDontSee('Elder')
            ->set('search', 'Elder')
            ->assertSee('The Elder Scrolls: Arena')
            ->assertSee('The Elder Scrolls V: Skyrim');
    }

    private function fakeSearchGames()
    {
        return Http::response([
            0 => [
                "id" => 1081,
                "cover" => [
                    "id" => "91131",
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ybf.jpg"
                ],
                "name" => "The Elder Scrolls Online",
                "slug" => "the-elder-scrolls-online"
            ],
            1 => [
                "id" => 53,
                "cover" =>  [
                    "id" => 91103,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1yan.jpg"
                ],
                "name" => "The Elder Scrolls II: Daggerfall",
                "slug" => "the-elder-scrolls-ii-daggerfall"
            ],
            2 => [
                "id" => 57,
                "cover" =>  [
                    "id" => 95264,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co21i8.jpg"
                ],
                "name" => "The Elder Scrolls III: Tribunal",
                "slug" => "the-elder-scrolls-iii-tribunal"
            ],
            3 => [
                "id" => 472,
                "cover" => [
                    "id" => 85100,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1tnw.jpg"
                ],
                "name" => "The Elder Scrolls V: Skyrim",
                "slug" => "the-elder-scrolls-v-skyrim"
            ],
            4 =>  [
                "id" => 58,
                "cover" => [
                    "id" => 95257,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co21i1.jpg"
                ],
                "name" => "The Elder Scrolls III: Bloodmoon",
                "slug" => "the-elder-scrolls-iii-bloodmoon"
            ],
            5 => [
                "id" => 52,
                "cover" =>  [
                    "id" => 120072,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2knc.jpg"
                ],
                "name" => "The Elder Scrolls: Arena",
                "slug" => "the-elder-scrolls-arena"
            ],
            6 =>  [
                "id" => 11120,
                "cover" => [
                    "id" => 91133,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ybh.jpg"
                ],
                "name" => "The Elder Scrolls: Legends",
                "slug" => "the-elder-scrolls-legends"
            ],
            7 =>  [
                "id" => 59,
                "cover" => [
                    "id" => 84680,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1tc8.jpg"
                ],
                "name" => "The Elder Scrolls IV: Oblivion",
                "slug" => "the-elder-scrolls-iv-oblivion"
            ]
        ]);
    }
}
