<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            [
                'name' => 'Makanan Berat',
                'description' => 'Kategori makanan utama',
                'status' => 'Available',
            ],

            [
                'name' => 'Minuman',
                'description' => 'Kategori minuman segar',
                'status' => 'Available',
            ],

            [
                'name' => 'Dessert',
                'description' => 'Kategori makanan penutup',
                'status' => 'Available',
            ],

            [
                'name' => 'Snack',
                'description' => 'Kategori camilan favorit',
                'status' => 'Available',
            ],

            [
                'name' => 'Seafood',
                'description' => 'Kategori seafood pilihan',
                'status' => 'Available',
            ],

            [
                'name' => 'Healthy Food',
                'description' => 'Kategori makanan sehat',
                'status' => 'Available',
            ],

            [
                'name' => 'Fast Food',
                'description' => 'Kategori makanan cepat saji',
                'status' => 'Available',
            ],

            [
                'name' => 'Traditional Food',
                'description' => 'Kategori makanan tradisional',
                'status' => 'Available',
            ],

            [
                'name' => 'Japanese Food',
                'description' => 'Kategori makanan Jepang',
                'status' => 'Available',
            ],

            [
                'name' => 'Korean Food',
                'description' => 'Kategori makanan Korea',
                'status' => 'Available',
            ],

            [
                'name' => 'Bakery',
                'description' => 'Kategori roti dan pastry',
                'status' => 'Available',
            ],

            [
                'name' => 'Street Food',
                'description' => 'Kategori jajanan kaki lima',
                'status' => 'Available',
            ],

            [
                'name' => 'BBQ',
                'description' => 'Kategori makanan bakar',
                'status' => 'Available',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}