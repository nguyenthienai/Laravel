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
        $product->name = 'Áo thun cổ trụ';
        $product->category_id = 2;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'aothun_cotru_betrai.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

		$product = new Product();
        $product->name = 'Áo thun NIKE';
        $product->category_id = 2;
        $product->description = '4-6 tuổi';
        $product->unitprice = 130000;
        $product->promotionprice = 110000;
        $product->unit = 'cái';
        $product->image = 'aothun_nike_betrai.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

  		$product = new Product();
        $product->name = 'Bộ thể thao';
        $product->category_id = 2;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'boquanao_thethao_betrai.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

         $product = new Product();
        $product->name = 'Quần jean Jara';
        $product->category_id = 2;
        $product->description = '4-6 tuổi';
        $product->unitprice = 130000;
        $product->promotionprice = 110000;
        $product->unit = 'cái';
        $product->image = 'quanjean_jara_betrai.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Bình Comotomo';
        $product->category_id = 3;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'sosinh_binhsua_comotomo.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

         $product = new Product();
        $product->name = 'Bình sũa Wesser cổ rộng';
        $product->category_id = 3;
        $product->description = '4-6 tuổi';
        $product->unitprice = 130000;
        $product->promotionprice = 110000;
        $product->unit = 'cái';
        $product->image = 'sosinh_binhsua_corong_wesser.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

         $product = new Product();
        $product->name = 'Bình ủ sữa Thái Lan';
        $product->category_id = 3;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'sosinh_binhusua_thailan.jpg';
        $product->status = 1;
        $product->hot = 0;
        $product->save();

         $product = new Product();
        $product->name = 'Gạc rốn DongFa';
        $product->category_id = 3;
        $product->description = '4-6 tuổi';
        $product->unitprice = 16000;
        $product->promotionprice = 16000;
        $product->unit = 'lốc';
        $product->image = 'sosinh_gacron_dongfa.jpg';
        $product->status = 1;
        $product->hot = 0;
        $product->save();

         $product = new Product();
        $product->name = 'Rơ lưỡi DongFa';
        $product->category_id = 3;
        $product->description = '4-6 tuổi';
        $product->unitprice = 15000;
        $product->promotionprice = 15000;
        $product->unit = 'lốc';
        $product->image = 'sosinh_roluoi_dongfa.jpg';
        $product->status = 1;
        $product->hot = 0;
        $product->save();

$product = new Product();
        $product->name = 'Váy Elsa';
        $product->category_id = 1;
        $product->description = '4-6 tuổi';
        $product->unitprice = 120000;
        $product->promotionprice = 100000;
        $product->unit = 'cái';
        $product->image = 'vay_elsa_1.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

         $product = new Product();
        $product->name = 'Váy Công Chúa';
        $product->category_id = 1;
        $product->description = '4-6 tuổi';
        $product->unitprice = 130000;
        $product->promotionprice = 110000;
        $product->unit = 'cái';
        $product->image = 'vay_congchua_1.jpg';
        $product->status = 1;
        $product->hot = 1;
        $product->save();

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
