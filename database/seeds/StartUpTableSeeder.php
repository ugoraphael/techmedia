<?php

use Illuminate\Database\Seeder;
use App\StartUp;

class StartUpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StartUp::create([
            'title' => 'Cable charged trucks in Germany',
            'slug' => 'Cable-charged-trucks-in-Germany',
            'content' => 'This idea is best to cut down the effect of global warming in our already wanning environment',
            'photo' => 'noimage.jpg',
            'tags' => 'Germany, cable, technology, startups, global warming',
            'startUp_category_id' => 1,

        ]);

        StartUp::create([
            'title' => 'Cable charged trucks in Germany-2',
            'slug' => 'Cable-charged-trucks-in-Germany',
            'content' => 'This idea is best to cut down the effect of global warming in our already wanning environment',
            'photo' => 'noimage.jpg',
            'tags' => 'Germany, cable, technology, startups, global warming',
            'startUp_category_id' => 2,

        ]);

        StartUp::create([
            'title' => 'Cable charged trucks in Germany-3',
            'slug' => 'Cable-charged-trucks-in-Germany',
            'content' => 'This idea is best to cut down the effect of global warming in our already wanning environment',
            'photo' => 'noimage.jpg',
            'tags' => 'Germany, cable, technology, startups, global warming',
            'startUp_category_id' => 3,

        ]);

        StartUp::create([
            'title' => 'Cable charged trucks in Germany-4',
            'slug' => 'Cable-charged-trucks-in-Germany',
            'content' => 'This idea is best to cut down the effect of global warming in our already wanning environment',
            'photo' => 'noimage.jpg',
            'tags' => 'Germany, cable, technology, startups, global warming',
            'startUp_category_id' => 1,

        ]);

        StartUp::create([
            'title' => 'Cable charged trucks in Germany-5',
            'slug' => 'Cable-charged-trucks-in-Germany',
            'content' => 'This idea is best to cut down the effect of global warming in our already wanning environment',
            'photo' => 'noimage.jpg',
            'tags' => 'Germany, cable, technology, startups, global warming',
            'startUp_category_id' => 4,

        ]);
    }
}
