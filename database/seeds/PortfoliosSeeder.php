<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            "name" => "SMS mobile app",
            "images" => "portfolio_pic1.jpg",
            "filter" => "apple",
        ]);

        Portfolio::create([
            "name" => "Finance App",
            "images" => "portfolio_pic2.jpg",
            "filter" => "design",
        ]);

        Portfolio::create([
            "name" => "GPS concept",
            "images" => "portfolio_pic3.jpg",
            "filter" => "design",
        ]);

        Portfolio::create([
            "name" => "Shopping",
            "images" => "portfolio_pic4.jpg",
            "filter" => "prototype android web",
        ]);

        Portfolio::create([
            "name" => "Managment",
            "images" => "portfolio_pic5.jpg",
            "filter" => "design",
        ]);

        Portfolio::create([
            "name" => "Iphone",
            "images" => "portfolio_pic6.jpg",
            "filter" => "web",
        ]);

        Portfolio::create([
            "name" => "Nexus phone",
            "images" => "portfolio_pic7.jpg",
            "filter" => "design web",
        ]);

        Portfolio::create([
            "name" => "Android",
            "images" => "portfolio_pic8.jpg",
            "filter" => "android",
        ]);
    }
}
