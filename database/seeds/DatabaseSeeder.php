<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // populate user roles
        $this->call(UserRolesTableSeeder::class);

        // populate example users
        $this->call(UsersTableSeeder::class);
    }
}
