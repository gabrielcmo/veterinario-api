<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'license' => $this->faker->unique()->numberBetween($min = 1, $max = 50),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->city . ", " . $this->faker->country,
        ];
    }
}
