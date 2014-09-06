<?php

use Faker\Factory as Faker;
use MDH\Roles\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        Role::create(
            [
                'name' => 'Developer',
                'machinename' => 'developer',
            ]
        );

        Role::create(
            [
                'name' => 'Owner',
                'machinename' => 'owner',
            ]
        );

        Role::create(
            [
                'name' => 'Admin',
                'machinename' => 'admin',
            ]
        );

        Role::create(
            [
                'name' => 'Manager',
                'machinename' => 'manager',
            ]
        );

        Role::create(
            [
                'name' => 'User',
                'machinename' => 'user',
            ]
        );
    }
}