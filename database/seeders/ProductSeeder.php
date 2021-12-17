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
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Koko",
            'product' => "Koko details",
            'stock' => 5,
            'price' => 100000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "hijab",
            'product' => "Hijab details",
            'stock' => 5,
            'price' => 50000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 2,
            'title' => "mukena",
            'product' => "mukena details",
            'stock' => 10,
            'price' => 100000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Kemeja",
            'product' => "Kemaja detail",
            'stock' => 2,
            'price' => 100000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Sirwal",
            'product' => "Sirwal details",
            'stock' => 7,
            'price' => 130000,
            'created_at' => now()
        ]);
    }
}
