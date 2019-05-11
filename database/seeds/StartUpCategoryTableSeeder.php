<?php

use Illuminate\Database\Seeder;
use App\StartUpCategory;

class StartUpCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StartUpCategory::create([
            'title' => 'Investors',
        ]);

        StartUpCategory::create([
            'title' => 'Funding and Exits',
        ]);

        StartUpCategory::create([
            'title' => 'Hubs and Spaces',
        ]);

    
    }
}
