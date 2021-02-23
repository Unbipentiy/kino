<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genries = [
            'Боевик',
            'Вестерн',
            'Гангстерский фильм',
            'Детектив',
            'Драма',
            'Исторический фильм',
            'Комедия',
            'Мелодрама',
            'Музыкальный фильм',
            'Нуар',
            'Политический фильм',
            'Приключенческий фильм',
            'Сказка',
            'Трагедия',
            'Трагикомедия',
        ];

        foreach ($genries as $genre) {
            DB::table('genries')->insert([
                'name' => $genre
            ]);
        }
    }
}
