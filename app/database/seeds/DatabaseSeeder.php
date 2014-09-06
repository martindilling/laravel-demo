<?php

class DatabaseSeeder extends Seeder
{
    /**
     * Tables in the system.
     *
     * @var array
     */
    protected $tables = [
        'role_user',
        'roles',
        'users',
    ];

    /**
     * Seeders to call
     *
     * @var array
     */
    protected $seeders = [
        'RolesTableSeeder',
        'UsersTableSeeder',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }

    /**
     * Clean out data from all table.
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
