<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'name' => fake()->randomElement([
        'Makanan Berat',
        'Minuman',
        'Dessert',
        'Snack',
        'Seafood'
    ]),

    'description' => fake()->randomElement([
        'Kategori makanan tradisional',
        'Kategori minuman segar',
        'Kategori dessert manis',
        'Kategori seafood pilihan',
        'Kategori camilan favorit',
    ]),

    'status' => fake()->randomElement([
        'Available',
        'Unavailable'
    ]),
];
    }
}
