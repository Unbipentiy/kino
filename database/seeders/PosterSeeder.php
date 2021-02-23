<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Россия',
            'США',
            'Казахстан',
            'Нигр',
            'Китай',
        ];

        DB::table('posters')->insert([
            'title' => Str::random(),
            'description' => Str::random(200),
            'start_date' => Carbon::now()->addDays(rand(0, 4))->format('Y/m/d'),
            'duration' => rand(100, 130),
            'genre_id' => rand(1, 15),
            'country' => $countries[rand(0,3)],
        ]);
    }
}
