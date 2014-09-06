<?php

/*
|--------------------------------------------------------------------------
| Environment specific variables
|--------------------------------------------------------------------------
|
| Save this file named like the following: ".env.local.php" but replace
| "local" with the environment name where you want the variables to apply.
|
| For production name the file ".env.php"
|
*/

return array(
    /**
     * Environment to run the application in.
     * Will only be applied when set on the server.
     * Defaults to "production" if not set on the server.
     */
    'APP_ENV'     => 'local',

    /**
     * Database config
     */
    'DB_HOST'     => 'localhost',
    'DB_DATABASE' => 'laravel-demo',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => 'root',
    'DB_PREFIX'   => '',
);
