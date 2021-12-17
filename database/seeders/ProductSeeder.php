<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Koko",
            'product' => "Koko details",
            'stock' => "2",
            'created_at' => now()
        ]);
    }
}
