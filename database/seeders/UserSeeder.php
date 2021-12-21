<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'username' => "admin",
            'email' => "ridhosalamsyah22@gmail.com",
            'password' => Hash::make('adminsabar'),
        ]);
        DB::table('users')->insert([
            'name' => "user",
            'username' => "user",
            'email' => "user@example.com",
            'password' => Hash::make('useruser'),
        ]);
    }
}
