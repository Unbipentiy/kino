<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SessionSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 8; $i++) {
            DB::table('sessions')->insert([
                'poster_id' => rand(1, 20),
                'hall' => rand(1,4),
                'date' => Carbon::now()->addHours(rand(0, 48)),
                'places' => json_encode([
                    [
                        'booking' => 1,
                        'pos' => [
                            'row' => 5,
                            'column' => 10,
                        ],
                        'user_id' => rand(1,2),
                    ],
                    [
                        'booking' => 1,
                        'pos' => [
                            'row' => 5,
                            'column' => 11,
                        ],
                        'user_id' => rand(1,2),
                    ],
                    [
                        'booking' => 1,
                        'pos' => [
                            'row' => 4,
                            'column' => 9,
                        ],
                        'user_id' => rand(1,2),
                    ],
                ]),
            ]);
        }
    }
}
