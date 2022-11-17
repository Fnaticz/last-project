<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Playtime;
use App\Models\Category;
use App\Models\Product;
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

        Playtime::create([
            'name' => '08.00-09.00',
            'slug' => '08.00-09.00'
        ]);

        Playtime::create([
            'name' => '09.00-10.00',
            'slug' => '09.00-10.00'
        ]);

        Playtime::create([
            'name' => '10.00-11.00',
            'slug' => '10.00-11.00'
        ]);

        Playtime::create([
            'name' => '11.00-12.00',
            'slug' => '11.00-12.00'
        ]);

        Playtime::create([
            'name' => '12.00-13.00',
            'slug' => '12.00-13.00'
        ]);

        Playtime::create([
            'name' => '13.00-14.00',
            'slug' => '13.00-14.00'
        ]);

        Playtime::create([
            'name' => '14.00-15.00',
            'slug' => '14.00-15.00'
        ]);

        Playtime::create([
            'name' => '15.00-16.00',
            'slug' => '15.00-16.00'
        ]);

        Playtime::create([
            'name' => '16.00-17.00',
            'slug' => '16.00-17.00'
        ]);

        Playtime::create([
            'name' => '17.00-18.00',
            'slug' => '17.00-18.00'
        ]);

        Playtime::create([
            'name' => '18.00-19.00',
            'slug' => '18.00-19.00'
        ]);

        Playtime::create([
            'name' => '19.00-20.00',
            'slug' => '19.00-20.00'
        ]);

        Playtime::create([
            'name' => '20.00-21.00',
            'slug' => '20.00-21.00'
        ]);

        Playtime::create([
            'name' => '21.00-22.00',
            'slug' => '21.00-22.00'
        ]);

        Playtime::create([
            'name' => '22.00-23.00',
            'slug' => '22.00-23.00'
        ]);

    }
}
