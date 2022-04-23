<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payout>
 */
class PayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(['delivered', 'undelivered']),
            'amount' => $this->faker->randomFloat($maxDecimals = 2, $min = 50, $max = 500),
            'delivered_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
