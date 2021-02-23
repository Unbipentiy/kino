<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@kino.com',
            'password' => Hash::make('admin'),
            'name' => 'Зубенко',
            'surname' => 'Михаил',
            'middle_name' => 'Петрович',
            'phone' => 89832625462,
            'admin' => 1,
            'discount_card' => rand(1000, 9999),
            'born_data' => Carbon::now()->subYears(20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'email' => 'user@mail.com',
            'password' => Hash::make('user'),
            'name' => 'Анатолий',
            'surname' => 'Пешков',
            'middle_name' => 'Андреевич',
            'phone' => 89832625461,
            'admin' => 0,
            'discount_card' => rand(1000, 9999),
            'born_data' => Carbon::now()->subYears(19),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
