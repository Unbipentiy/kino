<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PosterSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            'Россия',
            'США',
            'Казахстан',
            'Нигер',
            'Китай',
        ];

        for ($i=0; $i<20; $i++)
        DB::table('posters')->insert([
            'title' => Str::random(10),
            'description' => Str::random(200),
            'start_date' => Carbon::now()->addDays(rand(0, 4))->format('Y/m/d'),
            'duration' => rand(100, 130),
            'genre' => Str::random(10),
            'country' => $countries[rand(0,4)],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
