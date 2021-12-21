<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => "Celana",
        ]);
        DB::table('categories')->insert([
            'category' => "Gamis",
        ]);
        DB::table('categories')->insert([
            'category' => "Koko",
        ]);
        DB::table('categories')->insert([
            'category' => "Peci",
        ]);
        DB::table('categories')->insert([
            'category' => "Cadar",
        ]);
        DB::table('categories')->insert([
            'category' => "Kerudung",
        ]);
        DB::table('categories')->insert([
            'category' => "Mukena",
        ]);




    }
}
