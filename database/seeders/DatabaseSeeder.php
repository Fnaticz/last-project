<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
// use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'admin2',
            'username' => 'admin2',
            'email' => 'admin@ex.com',
            'password' => bcrypt('admin123')
        ]);

        Category::create([
            'name' => 'Bola',
            'slug' => 'bola'
        ]);

        Category::create([
            'name' => 'Basket',
            'slug' => 'basket'
        ]);

    }
}
