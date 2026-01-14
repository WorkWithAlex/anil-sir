<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'roxstonit+omni-admin@gmail.com'],
            [
                'name' => 'Omni Admin',
                'password' => Hash::make('Test@123'),
                'role' => 'super_admin',
            ]
        );
    }
}
