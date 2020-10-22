<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newUser = new User;
            $newUser->name = $faker->name(20);
            $newUser->email = $faker->email(30);
            $newUser->password = Hash::make('password');
            $newUser->save();

        }
    }
}
