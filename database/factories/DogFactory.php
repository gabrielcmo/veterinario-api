<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class DogFactory extends Factory
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
            'breed' => Str::random(8),
            'weight' => $this->faker->numberBetween(1, 20),
            'user_id' => User::all()->random()->id,
        ];
    }
}
