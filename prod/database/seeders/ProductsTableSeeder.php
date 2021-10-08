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
            'image' => 'products_images/ipad.jpeg',
            'manufacturer_id' => 1,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Surface 23',
            'price' => 1111,
            'url' => 'test.com',
            'image' => 'products_images/surface.jpeg',
            'manufacturer_id' => 2,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Galaxy s50',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/samsung.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Pixel 61',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/pixel.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'HTC One m53',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/htc.jpg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'One Plus Seventeen',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/oneplus.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone 82 Pro Max',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/iphone.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Oppo Find 88',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/oppo.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Nokia 7383',
            'price' => 2222,
            'url' => 'test.com',
            'image' => 'products_images/nokia.jpeg',
            'manufacturer_id' => 3,
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
