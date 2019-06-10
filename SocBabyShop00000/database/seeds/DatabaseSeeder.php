<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         // $this->call(MenuSeederTable::class);
         // $this->call(CategorySeederTable::class);
         //$this->call(SliderSeederTable::class);
         $this->call(ProductSeederTable::class);
    }
}
