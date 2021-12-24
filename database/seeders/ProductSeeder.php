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
            'image-api' => 'https://i.ibb.co/nmSMbtK/1-Baju-Koko-Pria-Kurta-Pakistan.jpg',
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Jogger Rogba",
            'image' => '2. Celana Sirwal Jogger Rogba.jpg',
            'image-api' => 'https://i.ibb.co/YB5NHVX/2-Celana-Sirwal-Jogger-Rogba.jpg',
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Riders",
            'image' => '3. Celana Sirwal Riders.jpg',
            'image-api' => 'https://i.ibb.co/Nsk9Bhc/3-Celana-Sirwal-Riders.jpg',
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Visual Forma Semi Formal",
            'image' => '4. Celana Sirwal Visual Forma Semi Formal.jpeg',
            'image-api' => 'https://i.ibb.co/S37nm0B/4-Celana-Sirwal-Visual-Forma-Semi-Formal.jpg',
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Rehat Rosal",
            'image' => '5. Celana Sirwal Rehat Rosal.jpg',
            'image-api' => 'https://i.ibb.co/WVzZCwh/5-Celana-Sirwal-Rehat-Rosal.jpg',
            'stock' => 5,
            'price' => 105000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Tactical Ripstop",
            'image' => '6. Celana Sirwal Tactical Ripstop.jpeg',
            'image-api' => 'https://i.ibb.co/hdwXQWp/6-Celana-Sirwal-Tactical-Ripstop.jpg',
            'stock' => 5,
            'price' => 122000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office Rosal",
            'image' => '7. Celana Sirwal Office Rosal.jpeg',
            'image-api' => 'https://i.ibb.co/PjGvbM0/7-Celana-Sirwal-Office-Rosal.jpg',
            'stock' => 5,
            'price' => 77500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Trendy",
            'image' => '8. Celana Sirwal Trendy.jpeg',
            'image-api' => 'https://i.ibb.co/Jv1DJqT/8-Celana-Sirwal-Trendy.jpg',
            'stock' => 5,
            'price' => 185000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Office J-047",
            'image' => '9. Celana Sirwal Office J-047.jpg',
            'image-api' => 'https://i.ibb.co/p4R7n0Y/9-Celana-Sirwal-Office-J-047.jpg',
            'stock' => 5,
            'price' => 239000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'type_id' => 1,
            'title' => "Celana Sirwal Outdoor Premium",
            'image' => '10. Celana Sirwal Outdor Premium.jpeg',
            'image-api' => 'https://i.ibb.co/JRcH1jp/10-Celana-Sirwal-Outdor-Premium.jpg',
            'stock' => 5,
            'price' => 195000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Al Haramain Altan",
            'image' => '1. Jubah Gamis Pria Al Haramain Altan.jpg',
            'image-api' => 'https://i.ibb.co/YBNVrNC/1-Jubah-Gamis-Pria-Al-Haramain-Altan.jpg',
            'stock' => 5,
            'price' => 111000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Harommain",
            'image' => '2. Jubah gamis pria Harommain.jpg',
            'image-api' => 'https://i.ibb.co/XbmfBsj/2-Jubah-gamis-pria-Harommain.jpg',
            'stock' => 5,
            'price' => 112500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Makhtab",
            'image' => '3. Jubah Gamis Pria Makhtab.jpg',
            'image-api' => 'https://i.ibb.co/T08r93b/3-Jubah-Gamis-Pria-Makhtab.jpg',
            'stock' => 5,
            'price' => 499000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Pollycotton",
            'image' => '4. Jubah Gamis Pria Pollycotton bestway.jpg',
            'image-api' => 'https://i.ibb.co/MDdyrK3/4-Jubah-Gamis-Pria-Pollycotton-bestway.jpg',
            'stock' => 5,
            'price' => 130000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Spun Poly",
            'image' => '5. Jubah Gamis Pria Spun Poly.jpg',
            'image-api' => 'https://i.ibb.co/m4jTd5T/5-Jubah-Gamis-Pria-Spun-Poly.jpg',
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 1,
            'title' => "Jubah Gamis Pria Toyobo",
            'image' => '6. Jubah Gamis Pria Toyobo.jpg',
            'image-api' => '',
            'stock' => 5,
            'price' => 187000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Kusta Pakistan",
            'image' => '1. Baju Koko Pria Kurta Pakistan.jpg',
            'image-api' => 'https://i.ibb.co/nmSMbtK/1-Baju-Koko-Pria-Kurta-Pakistan.jpg',
            'stock' => 5,
            'price' => 169000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Katun",
            'image' => '2. Baju Koko Pria Katun.jpg',
            'image-api' => 'https://i.ibb.co/CsNFKZT/2-Baju-Koko-Pria-Katun.jpg',
            'stock' => 5,
            'price' => 42900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Toyobo",
            'image' => '3. Baju Koko Pria Toyobo.jpg',
            'image-api' => 'https://i.ibb.co/Z6WXJfv/1-Baju-Koko-Pria-Kurta-Pakistan.jpg',
            'stock' => 5,
            'price' => 57000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Bordir",
            'image' => '4. Baju Koko Pria Bordir.jpg',
            'image-api' => 'https://i.ibb.co/wy6bZ1H/4-Baju-Koko-Pria-Bordir.jpg',
            'stock' => 5,
            'price' => 250000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'type_id' => 1,
            'title' => "Baju Koko Pria Qurta Raja",
            'image' => '5. Baju Koko Pria Qurta Raja Pakistan.jpeg',
            'image-api' => 'https://i.ibb.co/j4V9cLh/5-Baju-Koko-Pria-Qurta-Raja-Pakistan.jpg',
            'stock' => 5,
            'price' => 62000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Habasya Rosal",
            'image' => '1. Peci Habasya Rosal.jpg',
            'image-api' => 'https://i.ibb.co/3myKvsC/1-Peci-Habasya-Rosal.jpg',
            'stock' => 5,
            'price' => 36000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Tartan",
            'image' => '2. Peci Cap Tartan.jpg',
            'image-api' => 'https://i.ibb.co/kxw3tdp/2-Peci-Cap-Tartan.jpg',
            'stock' => 5,
            'price' => 50000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Cap Rosal",
            'image' => '3. Peci Cap Rosal.jpg',
            'image-api' => 'https://i.ibb.co/3NDbmQF/3-Peci-Cap-Rosal.jpg',
            'stock' => 5,
            'price' => 80000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Sulam Rosal",
            'image' => '4. Peci Sulam Rosal.jpg',
            'image-api' => 'https://i.ibb.co/ck0LzDs/4-Peci-Sulam-Rosal.jpg',
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'type_id' => 1,
            'title' => "Peci Songkok Kopiah Wadimor",
            'image' => '5. Peci Songkok Kopiah Wadimor.jpg',
            'image-api' => 'https://i.ibb.co/Z6C5FQ7/5-Peci-Songkok-Kopiah-Wadimor.jpg',
            'stock' => 5,
            'price' => 42500,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Khimar Basic Fadhila",
            'image' => '1. Khimar Basic Fadhila.jpeg',
            'image-api' => 'https://i.ibb.co/25xj2td/1-Khimar-Basic-Fadhila.jpg',
            'stock' => 5,
            'price' => 136900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Jilbab Cadar Ritz",
            'image' => '2. Jilbab Cadar Ritz.jpg',
            'image-api' => 'https://i.ibb.co/6y99QJy/2-Jilbab-Cadar-Ritz.jpg',
            'stock' => 5,
            'price' => 189900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar Yaman",
            'image' => '3. Cadar Yaman.jpg',
            'image-api' => 'https://i.ibb.co/vBqtn3w/3-Cadar-Yaman.jpg',
            'stock' => 5,
            'price' => 109900,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Poni Hidden",
            'image' => '4. Niqab Bandana Poni Hidden.jpg',
            'image-api' => 'https://i.ibb.co/GCz5CXs/4-Niqab-Bandana-Poni-Hidden.jpg',
            'stock' => 5,
            'price' => 75000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Cadar tali",
            'image' => '5. Cadar Tali.jpg',
            'image-api' => 'https://i.ibb.co/C8G6ZCr/5-Cadar-Tali.jpg',
            'stock' => 5,
            'price' => 10000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 5,
            'type_id' => 2,
            'title' => "Niqab Bandana Azizah Arthaya",
            'image' => '6. Niqab Bandana Azizah Arthaya.jpg',
            'image-api' => 'https://i.ibb.co/CsFxJYJ/6-Niqab-Bandana-Azizah-Arthaya.jpg',
            'stock' => 5,
            'price' => 21000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita by Sahira",
            'image' => '1. Gamis Wanita by Sahira.jpg',
            'image-api' => 'https://i.ibb.co/xhbw5SQ/1-Gamis-Wanita-by-Sahira.jpg',
            'stock' => 5,
            'price' => 275000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Hana",
            'image' => '2. Gamis Wanita Hana.jpg',
            'image-api' => 'https://i.ibb.co/PTv7cqG/2-Gamis-Wanita-Hana.jpg',
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Batik Pekalongan",
            'image' => '3. Gamis Wanita Batik Pekalongan.jpg',
            'image-api' => 'https://i.ibb.co/db2NWzC/3-Gamis-Wanita-Batik-Pekalongan.jpg',
            'stock' => 5,
            'price' => 84999,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Humaira",
            'image' => '4. Gamis Wanita Humaira.jpeg',
            'image-api' => 'https://i.ibb.co/M6bhkFp/4-Gamis-Wanita-Humaira.jpg',
            'stock' => 5,
            'price' => 213000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'type_id' => 2,
            'title' => "Gamis Wanita Fadhilah",
            'image' => '5. Gamis Wanita Fadhilah.jpeg',
            'image-api' => 'https://i.ibb.co/zbWRmph/5-Gamis-Wanita-Fadhilah.jpg',
            'stock' => 5,
            'price' => 255000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Shella Rempel",
            'image' => '1. Kerudung Shella Rempel.jpg',
            'image-api' => 'https://i.ibb.co/0FtCwnS/1-Kerudung-Shella-Rempel.jpg',
            'stock' => 5,
            'price' => 40000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Fortaleza",
            'image' => '2. Kerudung Fortaleza.jpg',
            'image-api' => 'https://i.ibb.co/1qXyfkx/2-Kerudung-Fortaleza.jpg',
            'stock' => 5,
            'price' => 150000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Anteng Slim",
            'image' => '3. Kerudung Khadijah Anteng Slim.jpg',
            'image-api' => 'https://i.ibb.co/PwGXYfT/3-Kerudung-Khadijah-Anteng-Slim.jpg',
            'stock' => 5,
            'price' => 180000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 6,
            'type_id' => 2,
            'title' => "Kerudung Khadijah Harsya",
            'image' => '4.Kerudung Khadijah Basic Pet Sky.jpg',
            'image-api' => 'https://i.ibb.co/f0vND0y/4-Kerudung-Khadijah-Basic-Pet-Sky.jpg',
            'stock' => 5,
            'price' => 210000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sunnah Katun Mikro",
            'image' => '1. Mukenna Sunnah katun mikro.jpg',
            'image-api' => 'https://i.ibb.co/0qVtKz2/1-Mukenna-Sunnah-katun-mikro.jpg',
            'stock' => 5,
            'price' => 89000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Maryam",
            'image' => '2. Mukena Sutra Maryam.jpg',
            'image-api' => 'https://i.ibb.co/SssLDpS/2-Mukena-Sutra-Maryam.jpg',
            'stock' => 5,
            'price' => 179000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Khodijah",
            'image' => '3. Mukena Siti Khodijah.jpg',
            'image-api' => 'https://i.ibb.co/m4DrqWS/3-Mukena-Siti-Khodijah.jpg',
            'stock' => 5,
            'price' => 135000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Sutra Dove",
            'image' => '4. Mukena Sutra Dove.jpeg',
            'image-api' => 'https://i.ibb.co/9Wp1w8k/4-Mukena-Sutra-Dove.jpg',
            'stock' => 5,
            'price' => 175000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Katus Motif Bunga",
            'image' => '5. Mukena Katus Motif Bunga.jpeg',
            'image-api' => 'https://i.ibb.co/d71MPsk/5-Mukena-Katus-Motif-Bunga.jpg',
            'stock' => 5,
            'price' => 120000,
            'created_at' => now()
        ]);
        DB::table('products')->insert([
            'category_id' => 7,
            'type_id' => 2,
            'title' => "Mukena Bali Traveling",
            'image' => '6. Mukena Bali Traveling.jpeg',
            'image-api' => 'https://i.ibb.co/4VPnKvD/6-Mukena-Bali-Traveling.jpg',
            'stock' => 5,
            'price' => 125000,
            'created_at' => now()
        ]);

    }
}
