<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '10000',
                'description' => 'A Smartphone with 4gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/us/mobile-phones/wing-5g/assets/images/product/4-medium.jpg'
            ],
            [
                'name' => 'samsung Mobile',
                'price' => '15000',
                'description' => 'A Smartphone with 6gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://images.samsung.com/in/smartphones/galaxy-s26/buy/kv_comparison_Tablet_in_v2.jpg?imbypass=true'
            ],
            [
                'name' => 'oppo Mobile',
                'price' => '20000',
                'description' => 'A Smartphone with 8gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.google.com/imgres?q=oppo%20reno%2015&imgurl=https%3A%2F%2Fi.gadgets360cdn.com%2Flarge%2Foppo_reno15_oppo_1_1767340933266.jpg&imgrefurl=https%3A%2F%2Fwww.gadgets360.com%2Fmobiles%2Fnews%2Foppo-reno-15-pro-mini-5g-india-launch-date-features-specifications-expected-10194033&docid=KkFCmaMHTjSE6M&tbnid=Szx6UW8PYqI9wM&vet=12ahUKEwiOyKzfyoOTAxUFTGwGHSIVMLEQnPAOegQIIRAB..i&w=1200&h=675&hcb=2&ved=2ahUKEwiOyKzfyoOTAxUFTGwGHSIVMLEQnPAOegQIIRAB'
            ],
            [
                'name' => 'realme Mobile',
                'price' => '25000',
                'description' => 'A Smartphone with 4gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.google.com/imgres?q=realme%2015%20pro&imgurl=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F61rYMOTyVmL.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.in%2Frealme-Smartphone-HyperGlow-SuperVOOC-Snapdragon%2Fdp%2FB0FJLBGPW3&docid=JT4TmsJlcyGG4M&tbnid=dxDElZdljSSoxM&vet=12ahUKEwjkwbbWp4OTAxWlRmwGHe4xEdIQnPAOegQIGhAB..i&w=1500&h=1500&hcb=2&ved=2ahUKEwjkwbbWp4OTAxWlRmwGHe4xEdIQnPAOegQIGhAB'
            ],
            [
                'name' => 'vivo Mobile',
                'price' => '15000',
                'description' => 'A Smartphone with 4gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://www.google.com/imgres?q=oppo&imgurl=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F818YeLG3cJL._AC_UF894%2C1000_QL80_.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.in%2FOPPO-Ocean-Blue-128GB-Storage%2Fdp%2FB0D9HT785B&docid=fI00gGak_crSYM&tbnid=RHknTmzItxK57M&vet=12ahUKEwj11IK8qIOTAxXCd2wGHY-hG-EQnPAOegQIGBAB..i&w=825&h=1000&hcb=2&ved=2ahUKEwj11IK8qIOTAxXCd2wGHY-hG-EQnPAOegQIGBAB'
            ]
        ]);
    }
}
