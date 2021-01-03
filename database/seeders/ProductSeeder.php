<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            [
                'name' => 'LG 5G',
                'category' => 'mobile',
                'description' => 'Multi-task like never before with virtually endless ways to use two screens',
                'price' => '200',
                'gallery' => "https://via.placeholder.com/1300x4.jpg%20C/O%20https://placeholder.com/"
            ],
            [
                'name' => '21:9 Ultrawide Monitors',
                'category' => 'computer',
                'description' => 'Range of sizes available: LG Ultrawide monitors come in a range of sizes from 25 inch to 34 inch monitors',
                'price' => '600',
                'gallery' => "https://via.placeholder.com/1300x4.jpg%20C/O%20https://placeholder.com/"
            ],
            [
                'name' => 'Gaming Monitors',
                'category' => 'computer',
                'description' => 'Get the ultimate gaming monitor. Discover the features that make LG \'s innovative collection',
                'price' => '600',
                'gallery' => "https://via.placeholder.com/1300x4.jpg%20C/O%20https://placeholder.com/"
            ],
            [
                'name' => 'LG Velvet ',
                'category' => 'mobile',
                'description' => 'Multi-task like never before with virtually endless ways to use two screens',
                'price' => '250',
                'gallery' => "https://via.placeholder.com/1300x4.jpg%20C/O%20https://placeholder.com/"
            ],
            [
                'name' => 'TV LED',
                'category' => 'TV',
                'description' => 'Television on book shelf in living room. Picture taken by Jonas Leupe',
                'price' => '300',
                'gallery' => "https://via.placeholder.com/1300x4.jpg%20C/O%20https://placeholder.com/"
            ]

        ]);
        
    }
}
