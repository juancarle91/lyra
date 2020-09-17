<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Slider::create([
            'titulo' => 'Slide 1'
        ]);

        $slide = new Slide();
        $slide->title = 'Mi titulo';
        $slide->save()
        */
        factory(Slide::class, 4)->create();
    }
}
