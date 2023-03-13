<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'additional_information' => fake()->paragraph(),
            'departure_date' => fake()->date(),
            'return_date' =>  fake()->date(),
            'status' => fake()->randomElement(['pending', 'cancelled', 'completed'])
        ];
    }
}
