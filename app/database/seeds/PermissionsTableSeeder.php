<?php

use Faker\Factory as Faker;
use MDH\Permissions\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $permissions = [
            [
                'name' => 'Manage Users',
                'machinename' => 'users.manage',
            ],
            [
                'name' => 'View Users',
                'machinename' => 'users.view',
            ],
            [
                'name' => 'Manage Roles',
                'machinename' => 'roles.manage',
            ],
            [
                'name' => 'View Roles',
                'machinename' => 'roles.view',
            ],
            [
                'name' => 'Manage Pages',
                'machinename' => 'pages.manage',
            ],
            [
                'name' => 'View Pages',
                'machinename' => 'pages.view',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

    }
}