<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Bob",
            'email' => "Bob@gmail.com",
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => "Fred",
            'email' => "Fred@gmail.com",
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => "John",
            'email' => "John@gmail.com",
            'password' => bcrypt('123456'),
        ]);
    }
}