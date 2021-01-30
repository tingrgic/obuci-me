<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shirts')->insert([
            ['manufacturer' => 'Pull&Bear', 'model_name' => 'Hoodie', 'colour' => 'Zelena','size' => 'XXL',],
            ['manufacturer' => 'H&M', 'model_name' => 'Kratka Majica', 'colour' => 'Crna','size' => 'L',],
            ['manufacturer' => 'C&A', 'model_name' => 'Duga Majica', 'colour' => 'Plava','size' => 'XL',]
        ]); 
    }
}
