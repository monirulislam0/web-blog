<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
// use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        //  \App\Models\Category::factory(20)->create();
        //  \App\Models\Post::factory(30)->create();
        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            PostTableSeeder::class,
        ]);
    }
}
