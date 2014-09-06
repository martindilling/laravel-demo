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
            $user = User::create(
                [
                    'firstname' => $i == 1 ? 'John'             : $faker->firstName,
                    'lastname'  => $i == 1 ? 'Doe'              : $faker->lastName,
                    'email'     => $i == 1 ? 'john@example.com' : $faker->unique()->email,
                    'password'  => Hash::make('password'),
                ]
            );

            if ($i == 1) {
                $rolesToAssign = [1];
            } else {
                $rolesToAssign = $faker->randomElements($roles, mt_rand(1,3));
            }

            $user->roles()->sync($rolesToAssign);
        }
    }
}