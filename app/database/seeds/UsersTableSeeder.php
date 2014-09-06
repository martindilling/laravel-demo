<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            User::create(
                [
                    'firstname' => $index == 1 ? 'John' : $faker->firstName,
                    'lastname'  => $index == 1 ? 'Doe' : $faker->lastName,
                    'email'     => $index == 1 ? 'john@example.com' : $faker->unique()->email,
                    'password'  => Hash::make('password'),
                ]
            );
        }
    }
}