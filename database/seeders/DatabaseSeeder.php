<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Seed a single user
        //User::factory()->create();
        $this->call([
            UserSeeder::class
        ]);

        //category
        \App\Models\Category::factory(5)->create();

        //product
        \App\Models\Product::factory(10)->create();
    }
}
