<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing users first (optional)
        // User::truncate();

        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'phone_number' => '+1234567890',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        // Create test users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => '+1234567891',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone_number' => '+1234567892',
            'password' => Hash::make('password'),
            'status' => 'inactive',
        ]);

        User::create([
            'name' => 'Bob Wilson',
            'email' => 'bob@example.com',
            'phone_number' => '+1234567893',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        User::create([
            'name' => 'Alice Brown',
            'email' => 'alice@example.com',
            'phone_number' => '+1234567894',
            'password' => Hash::make('password'),
            'status' => 'inactive',
        ]);
    }
}