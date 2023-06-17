<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory  as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create();
        for($i = 0;$i<= 10;$i++){
        $user = new User;
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = Hash::make('password123');
        $user->save();
        }
    }
}
