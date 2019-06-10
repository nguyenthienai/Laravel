<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Bé gái';
        $category->slug = 'begai';
        $category->parentid = 0;
        $category->save();

        $category = new Category();
        $category->name = 'Bé trai';
        $category->slug = 'betrai';
        $category->parentid = 0;
        $category->save();

        $category = new Category();
        $category->name = 'Đồ sơ sinh';
        $category->slug = 'dososinh';
        $category->parentid = 0;
        $category->save();

        $category = new Category();
        $category->name = 'Cho mẹ';
        $category->slug = 'chome';
        $category->parentid = 0;
        $category->save();

        $category = new Category();
        $category->name = 'Khác';
        $category->slug = 'khac';
        $category->parentid = 0;
        $category->save();

    }
}
