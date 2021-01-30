<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pants')->insert([
            ['manufacturer' => 'Adidas', 'model_name' => 'Adidas Originals', 'colour' => 'Plava','size' => 'XL',],
            ['manufacturer' => 'Nike', 'model_name' => 'Trenirka', 'colour' => 'Siva','size' => 'M',],
            ['manufacturer' => 'Armani', 'model_name' => 'Tajice', 'colour' => 'Zelena','size' => 'S',]
        ]);
    }
}
