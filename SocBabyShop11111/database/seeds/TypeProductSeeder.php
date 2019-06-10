<?php

use Illuminate\Database\Seeder;
use App\TypeProduct;
class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeProduct = new TypeProduct();
        $typeProduct->name ='váy';
        $typeProduct->description = 'xuân hạ thu đông';

        $typeProduct = new TypeProduct();
        $typeProduct->name ='đồ bộ';
        $typeProduct->description = 'xuân hạ thu đông';

        $typeProduct = new TypeProduct();
        $typeProduct->name ='áo';
        $typeProduct->description = 'xuân hạ thu đông';
    }
}
