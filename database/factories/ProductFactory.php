<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Chemise', 'Jupe', 'Pantalon', 'Manteau', 'Chaussures', 'Chapeau', 'Chaussettes']),
            'description' => $this->faker->paragraph(5),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'is_published' => $this->faker->boolean(),
            'is_sale' => $this->faker->boolean(),
            'reference' => $this->faker->bothify('??##?###?#??#?#?'),
            'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']),
        ];
    }
}
