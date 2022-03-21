<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaction_id' => $this->faker->uuid,
            'user_id' => $this->faker->uuid,
            'item_name' => $this->faker->colorName,
            'price' => $this->faker->randomNumber(5),
        ];
    }
}
