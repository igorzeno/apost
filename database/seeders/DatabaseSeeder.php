<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Director;
use App\Models\Film;
use App\Models\Post;
use App\Models\Tag;
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
        //\App\Models\User::factory(3)->create();

       // Category::factory()->count(3)->create();
        $posts = Post::factory()->count(2000)->create();
//        $tags = Tag::factory()->count(5)->create();
//
//        foreach ($posts as $post){
//            $rd = rand(1,5);
//            $tgsIds = $tags->random($rd)->pluck('id');
//            $post->tags()->attach($tgsIds);
//        }
    }
}
