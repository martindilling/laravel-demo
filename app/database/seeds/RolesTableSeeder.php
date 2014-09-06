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
                'permissions' => [
                    'pages.manage',
                ]
            ],
            [
                'name' => 'Usermanager',
                'machinename' => 'usermanager',
                'permissions' => [
                    'users.manage',
                    'users.view',
                ]
            ],
            [
                'name' => 'Rolemanager',
                'machinename' => 'rolemanager',
                'permissions' => [
                    'roles.manage',
                    'roles.view',
                ]
            ],
            [
                'name' => 'User',
                'machinename' => 'user',
                'permissions' => [
                    'pages.view',
                ]
            ],
        ];

        foreach ($roles as $role) {
            $createdRole = Role::create(
                [
                    'name'        => $role['name'],
                    'machinename' => $role['machinename'],
                ]
            );

            foreach ($role['permissions'] as $key => $permissionMachinename) {
                $createdRole->addPermission($permissionMachinename);
            }
        }

    }
}