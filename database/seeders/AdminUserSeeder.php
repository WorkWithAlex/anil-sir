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
            ['email' => 'admin@omnioutsource.com'],
            [
                'name' => 'Omni Admin',
                'password' => Hash::make('OmniAdmin@2026*'),
                'role' => 'super_admin',
            ]
        );
    }
}
