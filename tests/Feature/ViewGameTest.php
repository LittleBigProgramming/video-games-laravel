<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewGameTest extends TestCase
{

    public function testGamePageShowsCorrectGameInfo()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame()
        ]);

        $response = $this->get(route('games.show', 'hades--1'));

        $response->assertStatus(200);

        $response->assertSee('Hades');
        $response->assertSee('Hack and slash/Beat \'em up');
        $response->assertSee('Indie');
        $response->assertSee('PC');
        $response->assertSee('Mac');
        $response->assertSee('Switch');
        $response->assertSee('94');
        $response->assertSee('94');
        $response->assertSee('https://twitter.com/SupergiantGames');
        $response->assertSee('Defy the god of death as you hack and slash your way out of the Underworld in this rogue-like dungeon crawler from the creators of Bastion, Transistor, and Pyre.');
        $response->assertSee('images.igdb.com/igdb/image/upload/t_screenshot_big/sc5r7v.jpg');
        $response->assertSee('Borderlands 3');
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function fakeSingleGame()
    {
        return Http::response([
            0 => [
            "id" => 113112,
            "aggregated_rating" => 93.5,
            "cover" =>  [
                "id" => 81443,
                 "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1qub.jpg",
            ],
            "first_release_date" => 1600300800,
            "genres" => [
                0 => [
                "id" => 12,
                "name" => "Role-playing (RPG)"
              ],
              1 => [
                "id" => 25,
                "name" => "Hack and slash/Beat 'em up",
              ],
              2 => [
                "id" => 32,
                "name" => "Indie"
              ]
            ],
            "involved_companies" => [
                0 => [
                "id" => 108827,
                "company" => [
                "id" => 928,
                  "name" => "Supergiant Games"
                ]
              ]
            ],
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
            "rating" => 93.511275106614,
            "screenshots" => [
                0 => [
                "id" => 268555,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1450,
                "image_id" => "sc5r7v",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r7v.jpg",
                "width" => 2580,
                "checksum" => "1fc2be16-3fe8-de2c-b34d-90b769732e91",
              ],
              1 =>[
                "id" => 268556,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1000,
                "image_id" => "sc5r7w",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r7w.jpg",
                "width" => 1110,
                "checksum" => "a9a5b3fe-a2f7-7b55-7f95-2560c746a719"
              ],
              2 => [
                "id" => 268557,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc5r7x",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r7x.jpg",
                "width" => 1920,
                "checksum" => "53ee18d4-b3d5-7fa8-c547-62236fe8ed24"
              ],
              3 => [
                "id" => 268558,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc5r7y",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r7y.jpg",
                "width" => 1920,
                "checksum" => "057d6652-1254-9856-e004-5a2d94a47a61"
              ],
              4 => [
                "id" => 268559,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc5r7z",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc5r7z.jpg",
                "width" => 1920,
                "checksum" => "d32fde21-552e-ed5a-d0da-c9b64f820e81"
              ],
              5 =>[
                "id" => 401131,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lij",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lij.jpg",
                "width" => 1920,
                "checksum" => "6b45319a-dd0c-195e-51f9-3653010f22f2"
              ],
              6 =>[
                "id" => 401132,
                "alpha_channel" => true,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lik",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lik.jpg",
                "width" => 1920,
                "checksum" => "06be1964-15e3-48e3-c78b-ee53bf3f93d2"
              ],
              7 =>[
                "id" => 401133,
                "alpha_channel" => false,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lil",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lil.jpg",
                "width" => 1920,
                "checksum" => "ede2b480-a673-eb44-6440-4c476e34aaa4"
              ],
              8 => [
                "id" => 401134,
                "alpha_channel" => true,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lim",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lim.jpg",
                "width" => 1920,
                "checksum" => "cb92ae24-dd4a-0e32-5580-b6c76604d962"
              ],
              9 => [
                "id" => 401135,
                "alpha_channel" => true,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lin",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lin.jpg",
                "width" => 1920,
                "checksum" => "ccf77dae-5c0a-3a0b-d18e-73d6a36fd7a9"
              ],
              10 => [
                "id" => 401136,
                "alpha_channel" => true,
                "animated" => false,
                "game" => 113112,
                "height" => 1080,
                "image_id" => "sc8lio",
                "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc8lio.jpg",
                "width" => 1920,
                "checksum" => "3293bbf8-5a64-6519-f661-369bf9edc86a"
              ]
            ],
            "similar_games" => [
                0 => [
                "id" => 19164,
                "cover" => [
                "id" => 94287,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20r3.jpg",
                ],
                "name" => "Borderlands 3",
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
                "rating" => 79.384328276476,
                "slug" => "borderlands-3"
              ],
              1 => [
                "id" => 47823,
                "cover" => [
                    "id" => 76951,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ndj.jpg"
                ],
                "name" => "Citadel: Forged With Fire",
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
                "rating" => 50.0,
                "slug" => "citadel-forged-with-fire"
              ],
              2 => [
                "id" => 54775,
                "cover" =>  [
                "id" => 75809,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1mht.jpg"
                ],
                "name" => "Shadows: Awakening",
                "platforms" => [
                0 => [
                    "id" => 6,
                    "abbreviation" => "PC"
                  ],
                  1 =>  [
                    "id" => 48,
                    "abbreviation" => "PS4"
                  ],
                  2 => [
                "id" => 49,
                    "abbreviation" => "XONE"
                  ]
                ],
                "rating" => 60.0,
                "slug" => "shadows-awakening"
              ],
              3 => [
                "id" => 80916,
                "cover" => [
                "id" => 67256,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/fq2ekyx6ac8em4lpv3zj.jpg"
                ],
                "name" => "Omensight",
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
                "rating" => 79.725112617475,
                "slug" => "omensight"
              ],
              4 => [
                "id" => 96217,
                "cover" => [
                "id" => 72919,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1k9j.jpg"
                ],
                "name" => "Eternity: The Last Unicorn",
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
                "rating" => 60.0,
                "slug" => "eternity-the-last-unicorn"
              ],
              5 => [
                "id" => 103168,
                "cover" => [
                "id" => 112048,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2egg.jpg"
                ],
                "name" => "Warhammer: Chaosbane",
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
                  ]
                ],
                "rating" => 73.078467110654,
                "slug" => "warhammer-chaosbane"
              ],
              6 => [
                "id" => 103303,
                "cover" => [
                "id" => 91145,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1ybt.jpg"
                ],
                "name" => "The Elder Scrolls: Blades",
                "platforms" => [
                0 => [
                    "id" => 34,
                    "abbreviation" => "Android"
                  ],
                  1 => [
                    "id" => 39,
                    "abbreviation" => "iOS"
                  ],
                  2 => [
                    "id" => 130,
                    "abbreviation" => "Switch"
                  ]
                ],
                "rating" => 42.570985498896,
                "slug" => "the-elder-scrolls-blades"
              ],
              7 => [
                "id" => 106987,
                "cover" => [
                "id" => 97981,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co23lp.jpg"
                ],
                "name" => "Torchlight III",
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
                "slug" => "torchlight-iii",
              ],
              8 => [
                "id" => 115278,
                "cover" => [
                "id" => 93448,
                  "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co203s.jpg"
                ],
                "name" => "Rune Factory 4 Special",
                "platforms" => [
                0 => [
                "id" => 130,
                    "abbreviation" => "Switch"
                  ]
                ],
                "rating" => 80.815193000574,
                "slug" => "rune-factory-4-special"
              ]
            ],
            "slug" => "hades--1",
            "summary" => "Defy the god of death as you hack and slash your way out of the Underworld in this rogue-like dungeon crawler from the creators of Bastion, Transistor, and Pyre.",
            "videos" => [
                0 => [
                "id" => 40961,
                "game" => 113112,
                "name" => "Early Access Trailer",
                "video_id" => "593xCDfumN0",
                "checksum" => "f90c7f21-be16-6097-374d-50f8ff9fe80b"
              ],
              1 => [
                "id" => 40962,
                "game" => 113112,
                "name" => "Gameplay Trailer",
                "video_id" => "YZZFlcE0fWE",
                "checksum" => "1a82bce5-c97f-d014-1caf-bbec336f0645"
              ],
              2 => [
                "id" => 40963,
                "game" => 113112,
                "name" => "Launch Trailer",
                "video_id" => "Bz8l935Bv0Y",
                "checksum" => "8dd59fcc-aa6f-7336-7992-37ac1a10a8d2"
              ]
            ],
            "websites" => [
                0 => [
                "id" => 95305,
                "category" => 3,
                "game" => 113112,
                "trusted" => true,
                "url" => "https://en.wikipedia.org/wiki/Hades_(video_game)",
                "checksum" => "a5098609-4c40-d496-491b-c2c62416a497"
              ],
              1 => [
                "id" => 112307,
                "category" => 5,
                "game" => 113112,
                "trusted" => true,
                "url" => "https://twitter.com/SupergiantGames",
                "checksum" => "af85ce3c-b7c1-d276-eac3-07192e47123c"
              ],
              2 => [
                "id" => 115967,
                "category" => 13,
                "game" => 113112,
                "trusted" => true,
                "url" => "https://store.steampowered.com/app/1145360",
                "checksum" => "edbe2896-8807-251a-4691-91b8538d22e4"
              ],
              3 => [
                "id" => 120081,
                "category" => 16,
                "game" => 113112,
                "trusted" => true,
                "url" => "https://www.epicgames.com/store/en-US/product/hades/home",
                "checksum" => "d40c3170-a1ab-7501-c8db-80c0d79a8259"
              ],
              4 => [
                "id" => 154130,
                "category" => 1,
                "game" => 113112,
                "trusted" => false,
                "url" => "https://www.supergiantgames.com/games/hades",
                "checksum" => "e670fa62-89ca-be2a-89e0-b2d218146f15"
              ],
              5 => [
                "id" => 154131,
                "category" => 9,
                "game" => 113112,
                "trusted" => true,
                "url" => "https://www.youtube.com/user/supergiantgames"
              ]
            ]]
        ]);
    }
}
