<?php

namespace Database\Seeders;

use App\Models\shops;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo dữ liệu cho 10 cửa hàng giả mạo
        for ($i = 0; $i < 10; $i++) {
            shops::create([
                'user_id' => 1,
                'name' => $faker->company,
                'description' => $faker->paragraph,
                'logo' => $faker->imageUrl(),
            ]);
        }
    }
}
