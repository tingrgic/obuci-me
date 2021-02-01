<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class JacketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jackets')->insert([
            ['manufacturer' => 'Diesel', 'model_name' => 'Jakna model no1', 'colour' => 'Smeđa','size' => 'XL'],
            ['manufacturer' => 'Borovo', 'model_name' => 'Šuškavac', 'colour' => 'Crna','size' => 'XXL',],
            ['manufacturer' => 'Versace', 'model_name' => 'Kaput', 'colour' => 'Crveni','size' => 'L',]
            ]);
    }
}
