<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->rootUser();
        $faker = \Faker\Factory::create();
        foreach(range(1,9) as $val){
            User::create([
                'name'                  => $faker->name,
                'email'                 =>$faker->unique()->email,
                'email_verified_at'     => now(),
                'password'              => bcrypt('password'),
                'remember_token'        => Str::random(10),
            ]);
        }

    }
    public function rootUser(){
        User::create([
            'name'                  => 'Md Monirul islam',
            'email'                 => 'xmonirislam75@gmail.com',
            'email_verified_at'     => now(),
            'password'              => bcrypt('password'),
            'remember_token'        => Str::random(10),
        ]);
    }
}
