<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->name = 'du lich';
        $post->tomtat = 'alo alo';
        $post->noidung = 'fkhskf fshsf sfh f sf';
        $post->img = 'img1.jpg';

        $post->save();

    }
}
