<?php

use Faker\Factory as Faker;
use MDH\Roles\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $roles = [
            [
                'name' => 'Admin',
                'machinename' => 'admin',
            ],
            [
                'name' => 'Usermanager',
                'machinename' => 'usermanager',
            ],
            [
                'name' => 'Rolemanager',
                'machinename' => 'rolemanager',
            ],
            [
                'name' => 'User',
                'machinename' => 'user',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

    }
}