<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Personal_FavouritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_favourites')->insert([
            ['outfit_id' => '1', 'user_id' => '1']
            ]);
    }
}
