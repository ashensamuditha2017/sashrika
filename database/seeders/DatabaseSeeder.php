<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a farmer user
        User::factory()->create([
            'name' => 'Farmer User',
            'email' => 'farmer@test.com',
            'password' => Hash::make('12345678'), // Hash the password
            'role' => 'farmer', // Add the role here
        ]);

        // Create an officer user
        User::factory()->create([
            'name' => 'Officer User',
            'email' => 'officer@test.com',
            'password' => Hash::make('12345678'), // Hash the password
            'role' => 'officer', // Add the role here
        ]);
    }
}
