<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach(range(1,20) as $index){
            $cat = $faker->text($maxNbChars = 10);
            Category::create([
                'category_name'          => $cat.rand(1,100),
                'category_slug'          => str_replace(' ','-',$cat),
                'category_image'         => $faker->imageUrl($width = 640, $height = 480),
                'user_id'                =>rand(1,10),
                'status'                 =>'active',
            ]);
        }







    }
}
