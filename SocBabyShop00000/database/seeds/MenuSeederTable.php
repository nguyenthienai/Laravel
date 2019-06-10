<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenuSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu();
        $menu->name = 'Trang chủ';
        $menu->link = 'trangchu';
        $menu->parentid = 0;

        $menu->save();

         $menu = new Menu();
        $menu->name = 'Sản phẩm';
        $menu->link = 'sanpham';
        $menu->parentid = 0;

        $menu->save();

        $menu = new Menu();
        $menu->name = 'Giới Thiệu';
        $menu->link = 'gioithieu';
        $menu->parentid = 0;

        $menu->save();

        $menu = new Menu();
        $menu->name = 'Liên Hệ';
        $menu->link = 'lienhe';
        $menu->parentid = 0;

        $menu->save();

         $menu = new Menu();
        $menu->name = 'Thời trang';
        $menu->link = 'thoitrang';
        $menu->parentid = 2;

        $menu->save();
    }
}
