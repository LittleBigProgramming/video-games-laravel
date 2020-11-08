<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use App\Http\Livewire\PopularGames;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTheMainPageShowsPopularGames()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakePopularGames()
        ]);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [])
            ->call('loadPopularGames')
            ->assertSee('FIFA 21')
            ->assertSee('Hades')
            ->assertSee('PC, PS4, XONE, PS5, Series X, Stadia')
            ->assertSee('Super Mario 3D All-Stars');
    }

    private function fakePopularGames()
    {
        return Http::response([
            0 => [
            "id" => 113112,
            "cover" => [
                "id" => 81443,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1qub.jpg"
            ],
            "first_release_date" => 1600300800,
            "name" => "Hades",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 14,
                "abbreviation" => "Mac"
              ],
              2 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "rating" => 93.505317015817,
            "slug" => "hades--1",
            "total_rating_count" => 83
          ],
          1 => [
            "id" => 119277,
            "cover" => [
                "id" => 74951,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ltz.jpg"
            ],
            "first_release_date" => 1601251200,
            "name" => "Genshin Impact",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 34,
                "abbreviation" => "Android"
              ],
              2 => [
                "id" => 39,
                "abbreviation" => "iOS"
              ],
              3 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              4 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "rating" => 56.284547120206,
            "slug" => "genshin-impact",
            "total_rating_count" => 53,
          ],
          2 => [
            "id" => 9495,
            "cover" => [
                "id" => 77532,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1nto.jpg"
            ],
            "first_release_date" => 1600819200,
            "name" => "Squad",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ]
            ],
            "rating" => 89.684500759073,
            "slug" => "squad",
            "total_rating_count" => 41
          ],
          3 => [
            "id" => 134070,
            "cover" => [
                "id" => 102225,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co26vl.jpg"
            ],
            "first_release_date" => 1600992000,
            "name" => "Mafia: Definitive Edition",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ]
            ],
            "rating" => 78.438214840324,
            "slug" => "mafia-definitive-edition",
            "total_rating_count" => 38
          ],
          4 => [
            "id" => 134706,
            "cover" => [
                "id" => 105806,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co29n2.jpg"
            ],
            "first_release_date" => 1601596800,
            "name" => "Star Wars: Squadrons",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ],
              3 => [
                "id" => 162,
                "abbreviation" => "Oculus VR"
              ],
              4 => [
                "id" => 163,
                "abbreviation" => "Steam VR"
              ],
              5 => [
                "id" => 165,
                "abbreviation" => "PlayStation VR"
              ]
            ],
            "rating" => 71.889086627848,
            "slug" => "star-wars-squadrons",
            "total_rating_count" => 22
          ],
          5 => [
            "id" => 138235,
            "cover" => [
                "id" => 117904,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2iz4.jpg"
            ],
            "first_release_date" => 1601510400,
            "name" => "Super Mario Bros. 35",
            "platforms" => [
                0 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "rating" => 69.989083808674,
            "slug" => "super-mario-bros-35",
            "total_rating_count" => 20
          ],
          6 => [
            "id" => 138225,
            "cover" => [
                "id" => 114153,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2g2x.jpg"
            ],
            "first_release_date" => 1600387200,
            "name" => "Super Mario 3D All-Stars",
            "platforms" => [
                0 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "rating" => 83.422924185506,
            "slug" => "super-mario-3d-all-stars",
            "total_rating_count" => 20
          ],
          7 => [
            "id" => 135254,
            "cover" => [
                "id" => 116248,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2hp4.jpg"
            ],
            "first_release_date" => 1601596800,
            "name" => "Crash Bandicoot 4: It's About Time",
            "platforms" => [
                0 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              1 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ]
            ],
            "rating" => 79.012278732421,
            "slug" => "crash-bandicoot-4-its-about-time",
            "total_rating_count" => 20
          ],
          8 => [
            "id" => 131785,
            "cover" => [
                "id" => 117744,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2iuo.jpg"
            ],
            "first_release_date" => 1603152000,
            "name" => "Amnesia: Rebirth",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ]
            ],
            "rating" => 83.257740174741,
            "slug" => "amnesia-rebirth",
            "total_rating_count" => 16
          ],
          9 => [
            "id" => 75239,
            "cover" => [
              "id" => 112974,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2f66.jpg"
            ],
            "first_release_date" => 1600128000,
            "name" => "Spelunky 2",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ]
            ],
            "slug" => "spelunky-2",
            "total_rating_count" => 13
          ],
          10 => [
            "id" => 100413,
            "cover" => [
                "id" => 111897,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ec9.jpg"
            ],
            "first_release_date" => 1603929600,
            "name" => "Watch Dogs: Legion",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ],
              3 => [
                "id" => 167,
                "abbreviation" => "PS5"
              ],
              4 => [
                "id" => 169,
                "abbreviation" => "Series X"
              ],
              5 => [
                "id" => 170,
                "abbreviation" => "Stadia"
              ]
            ],
            "slug" => "watch-dogs-legion",
            "total_rating_count" => 12,
          ],
          11 => [
            "id" => 140158,
            "cover" => [
              "id" => 117771,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ivf.jpg"
            ],
            "first_release_date" => 1602892800,
            "name" => "supfly delivery simulator",
            "platforms" => [
                0 => [
                "id" => 3,
                "abbreviation" => "Linux"
              ],
              1 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              2 => [
                "id" => 14,
                "abbreviation" => "Mac"
              ]
            ],
            "rating" => 90.687830687831,
            "slug" => "supfly-delivery-simulator",
            "total_rating_count" => 11
          ],
          12 => [
            "id" => 139858,
            "cover" => [
              "id" => 117275,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ihn.jpg"
            ],
            "first_release_date" => 1601942400,
            "name" => "Action Taimanin",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 34,
                "abbreviation" => "Android"
              ],
              2 => [
                "id" => 39,
                "abbreviation" => "iOS"
              ]
            ],
            "rating" => 98.393977415307,
            "slug" => "action-taimanin--1",
            "total_rating_count" => 11
          ],
          13 => [
            "id" => 52006,
            "cover" => [
              "id" => 81253,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1qp1.jpg"
            ],
            "first_release_date" => 1602720000,
            "name" => "Noita",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ]
            ],
            "rating" => 89.536185210096,
            "slug" => "noita",
            "total_rating_count" => 11
          ],
          14 => [
            "id" => 139403,
            "cover" => [
              "id" => 116757,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2i39.jpg"
            ],
            "first_release_date" => 1602720000,
            "name" => "Jungles of Maxtheria",
            "platforms" => [
                0 => [
                "id" => 3,
                "abbreviation" => "Linux"
              ],
              1 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              2 => [
                "id" => 14,
                "abbreviation" => "Mac"
              ]
            ],
            "rating" => 96.649214659686,
            "slug" => "jungles-of-maxtheria",
            "total_rating_count" => 10
          ],
          15 => [
            "id" => 134101,
            "cover" => [
              "id" => 111479,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2e0n.jpg"
            ],
            "first_release_date" => 1602201600,
            "name" => "FIFA 21",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ],
              3 => [
                "id" => 167,
                "abbreviation" => "PS5"
              ],
              4 => [
                "id" => 169,
                "abbreviation" => "Series X"
              ],
              5 => [
                "id" => 170,
                "abbreviation" => "Stadia"
              ]
            ],
            "slug" => "fifa-21",
            "total_rating_count" => 10
          ],
          16 => [
            "id" => 121752,
            "cover" => [
              "id" => 114223,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2g4v.jpg"
            ],
            "first_release_date" => 1603756800,
            "name" => "Ghostrunner",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ],
              3 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "rating" => 81.205256794718,
            "slug" => "ghostrunner",
            "total_rating_count" => 10
          ],
          17 => [
            "id" => 136498,
            "cover" => [
                "id" => 118699,
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2jl7.jpg"
            ],
            "first_release_date" => 1604016000,
            "name" => "Pikmin 3 Deluxe",
            "platforms" => [
                0 => [
                "id" => 130,
                "abbreviation" => "Switch"
              ]
            ],
            "slug" => "pikmin-3-deluxe",
            "total_rating_count" => 9
          ],
          18 => [
            "id" => 122120,
            "cover" => [
              "id" => 94523,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20xn.jpg"
            ],
            "first_release_date" => 1604016000,
            "name" => "The Dark Pictures Anthology: Little Hope",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 48,
                "abbreviation" => "PS4"
              ],
              2 => [
                "id" => 49,
                "abbreviation" => "XONE"
              ]
            ],
            "slug" => "the-dark-pictures-anthology-little-hope",
            "total_rating_count" => 9
          ],
          19 => [
            "id" => 119171,
            "cover" => [
              "id" => 117335,
              "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ijb.jpg"
            ],
            "first_release_date" => 1601942400,
            "name" => "Baldur's Gate 3",
            "platforms" => [
                0 => [
                "id" => 6,
                "abbreviation" => "PC"
              ],
              1 => [
                "id" => 14,
                "abbreviation" => "Mac"
              ],
              2 => [
                "id" => 170,
                "abbreviation" => "Stadia"
              ]
            ],
            "slug" => "baldurs-gate-3",
            "total_rating_count" => 9
          ]
      ]);
    }
}
