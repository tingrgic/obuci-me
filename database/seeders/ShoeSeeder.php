<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoes')->insert([
            ['manufacturer' => 'Nike', 'model_name' => 'Blazer', 'colour' => 'Bijela','size' => '46',],
            ['manufacturer' => 'Converse', 'model_name' => 'All-Star', 'colour' => 'Crne','size' => 'L',],
            ['manufacturer' => 'C&A', 'model_name' => 'Duga Majica', 'colour' => 'Plava','size' => 'XL',]
        ]);
    }
}
