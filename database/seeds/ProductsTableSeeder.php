<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 300)->create()->each(function(App\Product $product) {
        	$product->tags()->attach([
        		rand(1,5), 
        		rand(6,14), 
        		rand(15,20)
        	]);
        });
       
    }
}
