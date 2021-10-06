<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review' => 'this is good',
            'rating' => 4.0,
            'user_id' => 1,
            'product_id' => 3,
            'likes' => 3,
            'dislikes' => 1,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is rad',
            'rating' => 5.0,
            'user_id' => 2,
            'product_id' => 3,
            'likes' => 2,
            'dislikes' => 6,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is ok',
            'rating' => 3.0,
            'user_id' => 4,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'pretty good',
            'rating' => 4.0,
            'user_id' => 3,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is rad',
            'rating' => 5.0,
            'user_id' => 5,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is ok',
            'rating' => 3.0,
            'user_id' => 6,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is good',
            'rating' => 4.0,
            'user_id' => 7,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is rad',
            'rating' => 5.0,
            'user_id' => 8,
            'product_id' => 3,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is ok',
            'rating' => 3.0,
            'user_id' => 4,
            'product_id' => 4,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is good',
            'rating' => 4.0,
            'user_id' => 3,
            'product_id' => 2,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is rad',
            'rating' => 5.0,
            'user_id' => 5,
            'product_id' => 1,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is ok',
            'rating' => 3.0,
            'user_id' => 5,
            'product_id' => 1,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'Great product',
            'rating' => 5.0,
            'user_id' => 7,
            'product_id' => 6,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'wonderful',
            'rating' => 5.0,
            'user_id' => 2,
            'product_id' => 6,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'fast and speedy',
            'rating' => 4.5,
            'user_id' => 7,
            'product_id' => 9,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'incredibly fast',
            'rating' => 5.0,
            'user_id' => 2,
            'product_id' => 9,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'strong and tough',
            'rating' => 5.0,
            'user_id' => 1,
            'product_id' => 8,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'what a durable and tough phone',
            'rating' => 4.0,
            'user_id' => 2,
            'product_id' => 8,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'durable',
            'rating' => 3.0,
            'user_id' => 5,
            'product_id' => 8,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'good protection',
            'rating' => 4.0,
            'user_id' => 7,
            'product_id' => 8,
            'likes' => 0,
            'dislikes' => 0,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
