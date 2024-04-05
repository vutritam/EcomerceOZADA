<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            ShopSeeder::class,
            UserSeeder::class,
        ]);

        // users::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
