<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@agia.com',
            'password' => Hash::make('admin'),
            'user_role' => 0
        ]);

        User::create([
            'name' => 'Member Test',
            'username' => 'member1',
            'email' => 'patrickjeromeauy@gmail.com',
            'password' => Hash::make('member'),
            'user_role' => 0
        ]);
    }
}
