<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo 10 sản phẩm giả mạo
        for ($i = 0; $i < 10; $i++) {
            products::create([
                'shop_id' => 4,
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 1, 100),
                'image' => $faker->imageUrl(),
                'category_id' => 1,
                'status' => $faker->randomElement(['available', 'sold_out', 'pending', 'disabled']),
                'quantity' => $faker->numberBetween(0, 100),
                'color' => $faker->safeColorName(),
            ]);
        }
    }
}
