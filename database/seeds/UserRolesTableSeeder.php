<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = new \App\UserRole();
        $userRole->title = 'client';
        $userRole->description = 'A client user.';
        $userRole->save();

        $userRole = new \App\UserRole();
        $userRole->title = 'moderator';
        $userRole->description = 'A moderator user.';
        $userRole->save();

        $userRole = new \App\UserRole();
        $userRole->title = 'administrator';
        $userRole->description = 'A administrator user.';
        $userRole->save();
    }
}
