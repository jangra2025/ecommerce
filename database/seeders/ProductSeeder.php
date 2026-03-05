<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => 10000,
                'description' => 'A Smartphone with 4GB RAM and many more features',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/us/mobile-phones/wing-5g/assets/images/product/4-medium.jpg'
            ],
            [
                'name' => 'Samsung Mobile',
                'price' => 15000,
                'description' => 'A Smartphone with 6GB RAM and many more features',
                'category' => 'mobile',
                'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/in/sm-a546elvdins/gallery/in-galaxy-a54-5g-sm-a546-sm-a546elvdins-thumb-535420597'
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => 20000,
                'description' => 'A Smartphone with 8GB RAM and many more features',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-reno10-5g-1.jpg'
            ],
            [
                'name' => 'Realme Mobile',
                'price' => 25000,
                'description' => 'A Smartphone with 4GB RAM and many more features',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/realme/realme-11-pro-1.jpg'
            ],
            [
                'name' => 'Vivo Mobile',
                'price' => 15000,
                'description' => 'A Smartphone with 4GB RAM and many more features',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-v27-1.jpg'
            ]
        ]);
    }
}