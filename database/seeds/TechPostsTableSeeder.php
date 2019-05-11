<?php

use Illuminate\Database\Seeder;
use App\TechPost;
class TechPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TechPost::create([
            'title' => 'The latest iPhone8 is worth checking out-1',
            'slug' => 'The-latest-iPhone8-is-worth-checking-out',
            'content' => 'The new iPhone takes away all limitations of the previous version, and quite user friendly',
            'photo' => 'noimage.jpg',
            'tags' => 'iPhone, new version',
            'tech_category_id' => 1,
        ]);

        TechPost::create([
            'title' => 'The latest iPhone8 is worth checking out-2',
            'slug' => 'The-latest-iPhone8-is-worth-checking-out',
            'content' => 'The new iPhone takes away all limitations of the previous version, and quite user friendly',
            'photo' => 'noimage.jpg',
            'tags' => 'iPhone, new version',
            'tech_category_id' => 2,
        ]);

        TechPost::create([
            'title' => 'The latest iPhone8 is worth checking out-3',
            'slug' => 'The-latest-iPhone8-is-worth-checking-out',
            'content' => 'The new iPhone takes away all limitations of the previous version, and quite user friendly',
            'photo' => 'noimage.jpg',
            'tags' => 'iPhone, new version',
            'tech_category_id' => 1,
        ]);

        TechPost::create([
            'title' => 'The latest iPhone8 is worth checking out-4',
            'slug' => 'The-latest-iPhone8-is-worth-checking-out',
            'content' => 'The new iPhone takes away all limitations of the previous version, and quite user friendly',
            'photo' => 'noimage.jpg',
            'tags' => 'iPhone, new version',
            'tech_category_id' => 3,
        ]);

        TechPost::create([
            'title' => 'The latest iPhone8 is worth checking out-5',
            'slug' => 'The-latest-iPhone8-is-worth-checking-out',
            'content' => 'The new iPhone takes away all limitations of the previous version, and quite user friendly',
            'photo' => 'noimage.jpg',
            'tags' => 'iPhone, new version',
            'tech_category_id' => 4,
        ]);

    }
}
