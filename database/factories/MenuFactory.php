<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->randomElement([
            'Nasi Goreng',
            'Es Teh',
            'Mie Ayam',
            'Jus Alpukat',
            'Pudding',
            'Ayam Bakar'
            ]),

            'price' => fake()->numberBetween(10000, 50000),
            'stock' => fake()->numberBetween(1, 100),
            'description' => fake()->sentence(),
        ];
    }
}
