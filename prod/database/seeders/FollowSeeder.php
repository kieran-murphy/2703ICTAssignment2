<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 2
        ]);
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 3
        ]);
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 4
        ]);
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 5
        ]);
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 6
        ]);
        DB::table('follows')->insert([
            'followed_id' => 1,
            'follower_id' => 7
        ]);
        DB::table('follows')->insert([
            'followed_id' => 6,
            'follower_id' => 2
        ]);
        DB::table('follows')->insert([
            'followed_id' => 8,
            'follower_id' => 3
        ]);
        DB::table('follows')->insert([
            'followed_id' => 9,
            'follower_id' => 4
        ]);
        DB::table('follows')->insert([
            'followed_id' => 6,
            'follower_id' => 5
        ]);
        DB::table('follows')->insert([
            'followed_id' => 4,
            'follower_id' => 6
        ]);
        DB::table('follows')->insert([
            'followed_id' => 3,
            'follower_id' => 7
        ]);
    }

   
}
