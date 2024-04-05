<?php

namespace Database\Seeders;

use App\Models\users;
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
        users::create([
            'country_region' => 'Vietnam',
            'trade_role' => 'both',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'company_name' => 'Admin Company',
            'full_name' => 'Admin User',
            'phone_number' => '123456789',
            'role' => 'admin'
        ]);
    }
}
