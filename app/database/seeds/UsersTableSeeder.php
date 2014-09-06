<?php

use Faker\Factory as Faker;
use MDH\Roles\Role;
use MDH\Users\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $roles = Role::lists('id');

        foreach (range(1, 20) as $i) {
            User::create(
                [
                    'role_id'   => $i == 1 ? 1                  : $faker->randomElement($roles),
                    'firstname' => $i == 1 ? 'John'             : $faker->firstName,
                    'lastname'  => $i == 1 ? 'Doe'              : $faker->lastName,
                    'email'     => $i == 1 ? 'john@example.com' : $faker->unique()->email,
                    'password'  => Hash::make('password'),
                ]
            );
        }
    }
}