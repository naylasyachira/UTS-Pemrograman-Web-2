<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\MenuSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            MenuSeeder::class,
        ]);
    }
}
