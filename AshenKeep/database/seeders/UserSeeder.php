<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'email' => 'admin@example.com',
                'password' => 'password123',
                'role' => 'Admin',
            ],
            [
                'email' => 'kibzfibz@gmail.com',
                'password' => 'password123',
                'role' => 'Office Staff',
            ],
            [
                'email' => 'financestaff@example.com',
                'password' => 'password123',
                'role' => 'Finance Staff',
            ],
            [
                'email' => 'miyabeken0@gmail.com',
                'password' => 'password123',
                'role' => 'Applicant',
            ],
            [
                'email' => 'nandayo992@gmail.com',
                'password' => 'password123',
                'role' => 'Applicant',
            ]
        ];

        foreach ($users as $user) {
            // Check if the user already exists, otherwise create it
            $created_user = User::firstOrCreate(
                ['email' => $user['email']], // Look for the email
                ['password' => Hash::make($user['password'])] // Create with this password if the user doesn't exist
            );
            
            // Assign the role to the created user
            $created_user->assignRole($user['role']);
        }
    }
}
