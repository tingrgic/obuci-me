<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jackets')->insert([
            ['name' => 'šareni outfit', 'season' => 'Ljeto'], //'shirt_id' => '1','shoe_id' => '1', 'jacket_id' => '1', 'pant_id' => '1']
            ]);
    }
}
