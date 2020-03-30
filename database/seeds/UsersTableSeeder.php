<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientRole = \App\UserRole::where('title', 'client')->first();
        $moderatorRole = \App\UserRole::where('title', 'moderator')->first();
        $administratorRole = \App\UserRole::where('title', 'administrator')->first();

        $client = new \App\User();
        $client->name = 'Example Client';
        $client->email = 'client@example.com';
        $client->password = bcrypt('password');
        $client->save();
        $client->roles()->attach($clientRole);

        $moderator = new \App\User();
        $moderator->name = 'Example Moderator';
        $moderator->email = 'moderator@example.com';
        $moderator->password = bcrypt('password');
        $moderator->save();
        $moderator->roles()->attach($moderatorRole);

        $administrator = new \App\User();
        $administrator->name = 'Admin';
        $administrator->email = 'admin@admin.com';
        $administrator->password = bcrypt('admin');
        $administrator->save();
        $administrator->roles()->attach($administratorRole);
    }
}
