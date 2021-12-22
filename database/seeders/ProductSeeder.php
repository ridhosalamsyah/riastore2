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
            'image' => '1. Celana Sirwal Xplora Rogba.jpg',
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Jogger Rogba",
            'image' => '2. Celana Sirwal Jogger Rogba.jpg',
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Riders",
            'image' => '3. Celana Sirwal Riders.jpg',
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Visual Forma Semi Formal",
            'image' => '4. Celana Sirwal Visual Forma Semi Formal.jpeg',
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Rehat Rosal",
            'image' => '5. Celana Sirwal Rehat Rosal.jpg',
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Tactical Ripstop",
            'image' => '6. Celana Sirwal Tactical Ripstop.jpeg',
            'stock' => 5,
            'price' => 122000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office Rosal",
            'image' => '7. Celana Sirwal Office Rosal.jpeg',
            'stock' => 5,
            'price' => 77500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Trendy",
            'image' => '8. Celana Sirwal Trendy.jpeg',
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office J-047",
            'image' => '9. Celana Sirwal Office J-047.jpg',
            'stock' => 5,
            'price' => 239000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Outdoor Premium",
            'image' => '10. Celana Sirwal Outdor Premium.jpeg',
            'stock' => 5,
            'price' => 195000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Al Haramain Altan",
            'image' => '1. Jubah Gamis Pria Al Haramain Altan.jpg',
            'stock' => 5,
            'price' => 111000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Harommain",
            'image' => '2. Jubah gamis pria Harommain.jpg',
            'stock' => 5,
            'price' => 112500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Makhtab",
            'image' => '3. Jubah Gamis Pria Makhtab.jpg',
            'stock' => 5,
            'price' => 499000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Pollycotton",
            'image' => '4. Jubah Gamis Pria Pollycotton bestway.jpg',
            'stock' => 5,
            'price' => 130000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Spun Poly",
            'image' => '5. Jubah Gamis Pria Spun Poly.jpg',
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Toyobo",
            'image' => '6. Jubah Gamis Pria Toyobo.jpg',
            'stock' => 5,
            'price' => 187000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Kusta Pakistan",
            'image' => '1. Baju Koko Pria Kurta Pakistan.jpg',
            'stock' => 5,
            'price' => 169000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Katun",
            'image' => '2. Baju Koko Pria Katun.jpg',
            'stock' => 5,
            'price' => 42900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Toyobo",
            'image' => '3. Baju Koko Pria Toyobo.jpg',
            'stock' => 5,
            'price' => 57000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Bordir",
            'image' => '4. Baju Koko Pria Bordir.jpg',
            'stock' => 5,
            'price' => 250000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Qurta Raja",
            'image' => '5. Baju Koko Pria Qurta Raja Pakistan.jpeg',
            'stock' => 5,
            'price' => 62000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Habasya Rosal",
            'image' => '1. Peci Habasya Rosal.jpg',
            'stock' => 5,
            'price' => 36000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Tartan",
            'image' => '2. Peci Cap Tartan.jpg',
            'stock' => 5,
            'price' => 50000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Rosal",
            'image' => '3. Peci Cap Rosal.jpg',
            'stock' => 5,
            'price' => 80000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Sulam Rosal",
            'image' => '4. Peci Sulam Rosal.jpg',
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Songkok Kopiah Wadimor",
            'image' => '5. Peci Songkok Kopiah Wadimor.jpg',
            'stock' => 5,
            'price' => 42500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Khimar Basic Fadhila",
            'image' => '1. Khimar Basic Fadhila.jpeg',
            'stock' => 5,
            'price' => 136900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Jilbab Cadar Ritz",
            'image' => '2. Jilbab Cadar Ritz.jpg',
            'stock' => 5,
            'price' => 189900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar Yaman",
            'image' => '3. Cadar Yaman.jpg',
            'stock' => 5,
            'price' => 109900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Poni Hidden",
            'image' => '4. Niqab Bandana Poni Hidden.jpg',
            'stock' => 5,
            'price' => 75000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar tali",
            'image' => '5. Cadar Tali.jpg',
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Azizah Arthaya ",
            'image' => '6. Niqab Bandana Azizah Arthaya.jpg',
            'stock' => 5,
            'price' => 21000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita by Sahira",
            'image' => '1. Gamis Wanita by Sahira.jpg',
            'stock' => 5,
            'price' => 275000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Hana",
            'image' => '2. Gamis Wanita Hana.jpg',
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Batik Pekalongan",
            'image' => '3. Gamis Wanita Batik Pekalongan.jpg',
            'stock' => 5,
            'price' => 84999,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Humaira",
            'image' => '4. Gamis Wanita Humaira.jpeg',
            'stock' => 5,
            'price' => 213000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Fadhilah",
            'image' => '5. Gamis Wanita Fadhilah.jpeg',
            'stock' => 5,
            'price' => 255000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Shella Rempel",
            'image' => '1. Kerudung Shella Rempel.jpg',
            'stock' => 5,
            'price' => 40000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Fortaleza",
            'image' => '2. Kerudung Fortaleza.jpg',
            'stock' => 5,
            'price' => 150000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Anteng Slim",
            'image' => '3. Kerudung Khadijah Anteng Slim.jpg',
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Harsya",
            'image' => '4.Kerudung Khadijah Basic Pet Sky.jpg',
            'stock' => 5,
            'price' => 210000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sunnah Katun Mikro",
            'image' => '1. Mukenna Sunnah katun mikro.jpg',
            'stock' => 5,
            'price' => 89000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Maryam",
            'image' => '2. Mukena Sutra Maryam.jpg',
            'stock' => 5,
            'price' => 179000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Khodijah",
            'image' => '3. Mukena Siti Khodijah.jpg',
            'stock' => 5,
            'price' => 135000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Dove",
            'image' => '4. Mukena Sutra Dove.jpeg',
            'stock' => 5,
            'price' => 175000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Katus Motis Bunga",
            'image' => '5. Mukena Katus Motif Bunga.jpeg',
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Bali Traveling",
            'image' => '6. Mukena Bali Traveling.jpeg',
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);

    }
}
