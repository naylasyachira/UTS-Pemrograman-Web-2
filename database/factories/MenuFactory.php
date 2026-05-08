<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
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
        $foods = [
            'Makanan Berat' => [
                'Nasi Goreng',
                'Ayam Geprek',
                'Mie Ayam',
            ],

            'Minuman' => [
                'Es Teh',
                'Jus Alpukat',
                'Kopi Susu',
            ],

            'Dessert' => [
                'Ice Cream',
                'Cheesecake',
                'Pudding',
            ],

            'Snack' => [
                'Kentang Goreng',
                'Chicken Nugget',
                'Cireng',
            ],

            'Seafood' => [
                'Udang Bakar',
                'Cumi Goreng',
                'Ikan Bakar',
            ],
            'Healthy Food' => [
                'Salad Buah',
                'Oatmeal',
                'Chicken Breast',
            ],

            'Fast Food' => [
                'Burger',
                'Pizza',
                'Hotdog',
            ],

            'Traditional Food' => [
                'Coto Makassar',
                'Soto Ayam',
                'Gudeg',
            ],

            'Japanese Food' => [
                'Sushi',
                'Ramen',
                'Takoyaki',
            ],

            'Korean Food' => [
                'Tteokbokki',
                'Kimchi',
                'Bibimbap',
            ],
            'Bakery' => [
                'Donut',
                'Croissant',
                'Toast',
            ],
            'Street Food' => [
                'Cireng',
                'Batagor',
                'Seblak',
            ],
            'BBQ' => [
                'Korean BBQ',
                'Beef Grill',
                'Smoked Chicken',
            ],
            
        ];

        $category = Category::inRandomOrder()->first();

        $menuName = fake()->randomElement($foods[$category->name]);

        return [
            'category_id' => $category->id,

            'name' => $menuName,

            'price' => fake()->numberBetween(10000, 50000),

            'stock' => fake()->numberBetween(1, 100),

            'description' => fake()->randomElement([
                'Menu makanan favorit pelanggan',
                'Menu spesial dengan cita rasa lezat',
                'Makanan fresh dan berkualitas',
                'Menu populer dan paling banyak dipesan',
                'Pilihan menu terbaik hari ini',
            ]),
        ];
    }
}