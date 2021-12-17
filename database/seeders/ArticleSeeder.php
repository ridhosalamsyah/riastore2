<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
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
            'title' => Str::random(10),
            'article' => Str::random(100),
            'created_at' => now()
        ]);
    }
}
