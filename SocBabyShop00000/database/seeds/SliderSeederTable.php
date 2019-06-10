<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new Slider();
        $slider->name = 'slideshow';
        $slider->link = 'images/slider';
        $slider->img = 'slide3.jpg';
        $slider->status = 1;
        $slider->save();

        $slider = new Slider();
        $slider->name = 'slideshow';
        $slider->link = 'images/slider';
        $slider->img = 'slide5.jpg';
        $slider->status = 1;
        $slider->save();
    }
}
