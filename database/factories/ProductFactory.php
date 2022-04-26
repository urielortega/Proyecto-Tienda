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
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(1),
            'price' => $this->faker->randomFloat($maxDecimals = 2, $min = 3, $max = 100),
            'stock' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'published_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'handling_percentage' => $this->faker->randomFloat($maxDecimals = 2, $min = 0, $max = 1),
            'reason'=> $this->faker->paragraph(1),
        ];
    }
}
