<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product = new Product();
        $product->name = 'Yếm Jean Bé Trai';
        $product->category_id = 2;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'yem_jean_betrai.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();       
    }
}
