<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
            ['name' => 'Tin', 'email' => 'tinovaAplikacija@gmail.com', 'password' => 'mojaSifra', 'outfit_id' => '1', 'role_id' => '1'],
            ['name' => 'Davor', 'email' => 'DAvorovaAplikacija@gmail.com', 'password' => 'DavorovaSifra', 'outfit_id' => '1', 'role_id' => '1'],
            ['name' => 'Andrej', 'email' => 'AndrejevaAplikacija@gmail.com', 'password' => 'AndrejevaSifra', 'outfit_id' => '1', 'role_id' => '1']
        ]);
    }
}
