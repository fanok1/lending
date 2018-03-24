<?php

use Illuminate\Database\Seeder;
use App\People;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        People::create([
            "name"=>"Tom Rensed",
            "position"=>"Chief Executive Officer",
            "images"=>"team_pic1.jpg",
            "text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text."
        ]);

        People::create([
            "name"=>"Kathren Mory",
            "position"=>"Vice President",
            "images"=>"team_pic2.jpg",
            "text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text."
        ]);

        People::create([
            "name"=>"Lancer Jack",
            "position"=>"Senior Manager",
            "images"=>"team_pic3.jpg",
            "text"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text."
        ]);
    }
}
