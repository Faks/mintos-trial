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
        // $this->call(UsersTableSeeder::class);
        
        return User::create(
            [
                'email'             => 'hakerx1@gmail.com',
                'password'          => bcrypt('Hakerx80'),
                'email_verified_at' => now(),
            ]
        );
    }
}
