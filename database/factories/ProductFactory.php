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
            'pname'=>fake()->name,
            'pcid'=>fake()->numberBetween(1,3),
            'pdesc'=>fake()->paragraph(),
            'pquantity'=>fake()->numberBetween(100,1000),
            'pbprice'=>fake()->randomNumber(8),
            'psprice'=>fake()->randomNumber(8),
        ];
    }
}
