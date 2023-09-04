<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ename'=>fake()->unique()->name(),
            'eposition'=>fake()->randomElement(['Teller','Electrician','Janitor']),
            'ephone'=>fake()->unique()->phoneNumber(),
            'eemail'=>fake()->unique()->safeEmail(),
            'hdate'=>fake()->date(),
            'salary'=>fake()->randomNumber(5)
        ];
    }
}
