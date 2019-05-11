<?php

use Illuminate\Database\Seeder;
use App\TechCategory;

class TechCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TechCategory::create([
            'title' => 'Innovation',
        ]);

        TechCategory::create([
            'title' => 'Culture',
        ]);

        TechCategory::create([
            'title' => 'Market',
        ]);

        TechCategory::create([
            'title' => 'Strategies',
        ]);
    }
}
