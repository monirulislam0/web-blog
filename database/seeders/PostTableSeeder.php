<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,20) as $index){
        $this->postSeeder(Faker::create());
        }
    }

    public function postSeeder($faker){
        $text = $faker->text(20);
        Post::create([
            'post_title'            => $text,
            'post_slug'             => str_replace(' ','-',$text),
            'post_desc'             => $faker->text(400),
            'post_image'            => $faker->imageUrl($width = 640, $height = 480),
            'category_id'           => rand(1,20),
            'user_id'               => rand(1,10),
            'status'                => 'active',

        ]);

    }

}
