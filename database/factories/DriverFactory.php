<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'yoe' => $this->faker->randomElement([1, 2, 3]),
            'gender' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'photo_url' => "https://source.unsplash.com/random/500x500/?face%20formal"
        ];
    }
}
