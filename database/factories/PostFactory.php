<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $text = $this->faker->text(20);
        return [
            'post_title'            => $text,
            'post_slug'             => str_replace(' ','-',$text),
            'post_desc'             => $this->faker->text(400),
            'post_image'            => $this->faker->imageUrl($width = 640, $height = 480),
            'category_id'           => rand(1,20),
            'user_id'               => rand(1,10),
            'status'                => 'active',
        ];
    }
}
