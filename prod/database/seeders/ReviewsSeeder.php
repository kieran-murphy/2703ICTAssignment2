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
            'user_id' => 3,
            'product_id' => 3,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is rad',
            'rating' => 5.0,
            'user_id' => 3,
            'product_id' => 3,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('reviews')->insert([
            'review' => 'this is ok',
            'rating' => 3.0,
            'user_id' => 4,
            'product_id' => 4,
            'created_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
