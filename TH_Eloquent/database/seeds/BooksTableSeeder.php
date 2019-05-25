<?php

use Illuminate\Database\Seeder;
use App\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,5) as $index) {
            Book::create([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->text,
                'quantity' => rand(1, 20),
                'price' => rand(20, 100)*1000,
                'author_id' => rand(1, 4),
            ]);
        }
    }

}
