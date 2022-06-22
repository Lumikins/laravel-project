<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Product::create([
            'name' => 'skirt',
            'description' => 'some skirt',
            'price' => 12,
            'size' => 'S',
            'is_published' => true,
            'is_sale' => false,
            'reference' => 'fgahsg717217has'
        ]);

        Product::create([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'price' => rand(1, 100),
            'size' => 'XL',
            'is_published' => true,
            'is_sale' => false,
            'reference' => 'dsfkdsjf8uf4j48sdfd'
        ]);
    }
}
