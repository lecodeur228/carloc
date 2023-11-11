<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'age' => 20,
            'telephone ' => fake()->phoneNumber(),
            'email ' => fake()->unique()->safeEmail(),
            'image_cart_url ' => fake()->imageUrl(),
            'verification ' => 1,
        ];
    }
}
