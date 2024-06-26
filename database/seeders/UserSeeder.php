<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'role_id' => 1,
            'name' => 'Super Admin',
            'email' => 'adminEstate@gmail.com',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);
        \App\Models\User::factory()->create([
            'role_id' => 2,
            'name' => 'Admin Estate',
            'email' => 'madame@gmail.com',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);
    }
}
