<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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
//        $product1 = new Product();
//        $product1->name = "Samsung s12";
//        $product1->price = 1230.12;
//        $product1->description = "Hang moi ve";
//        $product1->save();
        Product::factory()->count(5)->create();
    }
}
