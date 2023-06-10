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
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'price' => $this->faker->randomElement([200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 800]),
            'discount' => $this->faker->randomElement([10, 15, 20, 25, 30]),
            'favorite' => $this->faker->boolean()
        ];
    }
}
