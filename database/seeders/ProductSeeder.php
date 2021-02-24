<?php

namespace Database\Seeders;

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
        //

        DB::table('products')->insert([
            'name'=>'Oppo mobil',
            "price"=>"300",
            "description"=>"A samartphone with 4gb ram and much more features",
            "catagory"=>"mobile",
            "gallary"=>""
        ],
        [
            'name'=>'Panasonic Tv',
            "price"=>"400",
            "description"=>"A samart tv  and much more features",
            "catagory"=>"Tv",
            "gallary"=>""
        ],
        [
            'name'=>'Soni Tv',
            "price"=>"500",
            "description"=>"A samartphone with 4gb ram and much more features",
            "catagory"=>"Tv",
            "gallary"=>""
        ],
        [
            'name'=>'LG fridge',
            "price"=>"200",
            "description"=>"A fridge and much more features",
            "catagory"=>"fridge",
            "gallary"=>""
        ]
    );
    }
}
