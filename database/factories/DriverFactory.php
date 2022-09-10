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
        $photoRandom = "https://avatars.dicebear.com/api/adventurer/". $this->faker->name.".svg";
        return [
            'full_name' => $this->faker->name,
            'yoe' => $this->faker->randomElement([1, 2, 3]),
            'gender' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'photo_url' => $photoRandom
        ];
    }
}
