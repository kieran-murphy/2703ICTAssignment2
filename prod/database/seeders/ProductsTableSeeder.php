<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iPad Pro 9',
            'price' => 1234,
            'url' => 'google.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Surface 23',
            'price' => 1111,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s50',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s51',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s52',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s53',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s54',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s55',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s56',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/default.png',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
