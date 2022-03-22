<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat = $this->faker->text($maxNbChars = 10);
        return [
           'category_name'          => $cat,
           'category_slug'          => str_replace(' ','-',$cat),
           'category_image'         => $this->faker->imageUrl($width = 640, $height = 480),
           'user_id'                =>rand(1,10),
           'status'                 =>'active',
        ];
    }
}
