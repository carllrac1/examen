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
            'price'=> $this->faker->randomFloat(2,300,5000),
            'discount_percentage'=> $this->faker->numberBetween(0,15),
            'rating'=> $this->faker->numberBetween(0,10),
            'stock'=> $this->faker->numberBetween(0,100),
            'brand'=> $this->faker->word(),
            'category' => $this->faker->randomElement(['Computers','Phones','Tablets','Tv','Audio','Cameras','Videogames','Smartwatches','Accessories']),
            'thumbnail' => $this->faker->imageUrl(),
        ];
    }
}
