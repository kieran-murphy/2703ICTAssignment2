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
            'name' => "Moderator",
            'email' => "Moderator@a.org",
            'type' => "Moderator",
            'password' => bcrypt('1234'),

        ]);
        DB::table('users')->insert([
            'name' => "Chris",
            'email' => "Chris@a.org",
            'type' => "Moderator",
            'password' => bcrypt('1234'),

        ]);
        DB::table('users')->insert([
            'name' => "Member",
            'email' => "Member@a.org",
            'type' => "Member",
            'password' => bcrypt('1234'),

        ]);
        DB::table('users')->insert([
            'name' => "Cara",
            'email' => "Cara@a.org",
            'type' => "Member",
            'password' => bcrypt('1234'),

        ]);
        DB::table('users')->insert([
            'name' => "Bob",
            'email' => "Bob@a.org",
            'type' => "Member",
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => "Fred",
            'email' => "Fred@a.org",
            'type' => "Member",
            'password' => bcrypt('1234'),
        ]);
    }
}