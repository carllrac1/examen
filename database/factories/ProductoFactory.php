<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(200),
            'price'=> $this->faker->randomFloat(2,0,4),
            'discount_percentage'=> $this->faker->numberBetween(0,15),
            'rating'=> $this->faker->numberBetween(0,10),
            'stock'=> $this->faker->numberBetween(0,100),
            'brand'=> $this->faker->word(),
            'category' => $this->faker->word(),
            'thumbnail' => $this->faker->imageUrl(),
        ];
    }
}
