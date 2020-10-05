<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return User
     */
    public function run()
    {
        return User::create(
            [
                'email' => 'mintos-trial@solum-designum.eu',
                'password' => bcrypt('mintos-trial'),
                'email_verified_at' => now(),
            ]
        );
    }
}
