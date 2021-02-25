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
        DB::table('sessions')->insert([
            'poster_id' => rand(1, 20),
            'hall' => rand(1,4),
            'date' => Carbon::now()->addHours(rand(0, 48)),
            'places' => json_encode([
                10 => [
                    5 => [
                        'booking' => 1,
                        'user_id' => rand(1,2),
                    ],
                ],
                10 => [
                    6 => [
                        'booking' => 1,
                        'user_id' => rand(1,2),
                    ],
                ],
            ])
        ]);
    }
}
