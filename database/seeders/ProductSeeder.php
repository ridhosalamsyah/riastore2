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
            'title' => "Celana Sirwal Xplora Rogba",
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Jogger Rogba",
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Riders",
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Visual Forma Semi Formal",
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Rehat Rosal",
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Tactical Ripstop",
            'stock' => 5,
            'price' => 122000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office Rosal",
            'stock' => 5,
            'price' => 77500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Trendy",
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office J-047",
            'stock' => 5,
            'price' => 239000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Outdoor Premium",
            'stock' => 5,
            'price' => 195000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Al Haramain Altan",
            'stock' => 5,
            'price' => 111000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Harommain",
            'stock' => 5,
            'price' => 112500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Makhtab",
            'stock' => 5,
            'price' => 499000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Pollycotton",
            'stock' => 5,
            'price' => 130000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Spun Poly",
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Toyobo",
            'stock' => 5,
            'price' => 187000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Kusta Pakistan",
            'stock' => 5,
            'price' => 169000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Katun",
            'stock' => 5,
            'price' => 42900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Toyobo",
            'stock' => 5,
            'price' => 57000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Bordir",
            'stock' => 5,
            'price' => 250000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Qurta Raja",
            'stock' => 5,
            'price' => 62000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Habasya Rosal",
            'stock' => 5,
            'price' => 36000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Tartan",
            'stock' => 5,
            'price' => 50000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Rosal",
            'stock' => 5,
            'price' => 80000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Sulam Rosal",
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Songkok Kopiah Wadimor",
            'stock' => 5,
            'price' => 42500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Khimar Basic Fadhila",
            'stock' => 5,
            'price' => 136900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Jilbab Cadar Ritz",
            'stock' => 5,
            'price' => 189900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar Yaman",
            'stock' => 5,
            'price' => 109900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Poni Hidden",
            'stock' => 5,
            'price' => 75000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar tali",
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Azizah Arthaya ",
            'stock' => 5,
            'price' => 21000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita by Sahira",
            'stock' => 5,
            'price' => 275000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Hana",
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Batik Pekalongan",
            'stock' => 5,
            'price' => 84999,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Humaira",
            'stock' => 5,
            'price' => 213000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Fadhilah",
            'stock' => 5,
            'price' => 255000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Shella Rempel",
            'stock' => 5,
            'price' => 40000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Fortaleza",
            'stock' => 5,
            'price' => 150000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Anteng Slim",
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Harsya",
            'stock' => 5,
            'price' => 210000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sunnah Katun",
            'stock' => 5,
            'price' => 89000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Maryam",
            'stock' => 5,
            'price' => 179000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Khodijah",
            'stock' => 5,
            'price' => 135000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Dove",
            'stock' => 5,
            'price' => 175000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Katus Motis Bunga",
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Bali Traveling",
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);

    }
}
