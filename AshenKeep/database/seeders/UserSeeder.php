<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
                'email' => 'officestaff@example.com',
                'password' => 'password123',
                'role' => 'Office Staff',
            ],
            [
                'email' => 'financestaff@example.com',
                'password' => 'password123',
                'role' => 'Finance Staff',
            ],
            [
                'email' => 'user@example.com',
                'password' => 'password123',
                'role' => 'Applicant',
            ]
        ];

        foreach($users as $user) {
            $created_user = User::create([
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
            
            $created_user->assignRole($user['role']);
        }
    }
}