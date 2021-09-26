<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 10,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 2,
            'quantity' => 20,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('orders')->insert([
            'user_id' => 1,
            'product_id' => 3,
            'quantity' => 30,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
