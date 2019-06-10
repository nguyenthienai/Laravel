<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'váy elsa';
        $product->type_id = '1';
        $product->description = '4-6 tuổi';
        $product->unitprice = '120000';
        $product->promotionprice = '100000';
        $product->unit = 'cái';
        $product->image = 'vay1.jpg';
        $product->new = '1';

        $product->save();

         $product = new Product();
        $product->name = 'bộ siêu nhân';
        $product->type_id = '2';
        $product->description = '4-6 tuổi';
        $product->unitprice = '120000';
        $product->promotionprice = '100000';
        $product->unit = 'cái';
        $product->image = 'bo1.jpg';
        $product->new = '1';

        $product->save();
    }
}
