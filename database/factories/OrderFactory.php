<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'payment_type' => $this->faker->randomElement(['debit', 'credit', 'transfer']),
            'payment_proof' => $this->faker->lexify('??????.jpg'),
            'rating' => $this->faker->numberBetween(1,10),
            'placed_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'amount' => $this->faker->randomFloat($maxDecimals = 2, $min = 50, $max = 500),
        ];
    }
}
