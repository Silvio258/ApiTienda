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
            //
            'code' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'category' => $this->faker->randomElement(['food', 'drink', 'snack', 'electronic','clothing','accessories','home','office','beauty','health']),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->numberBetween(1, 100),
            'distributor' => $this->faker->company(),
        ];
    }
}
