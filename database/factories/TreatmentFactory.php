<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dog;
use App\Models\Doctor;
use App\Models\TreatmentStatus;
use Illuminate\Support\Str;

class TreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dog_id' => Dog::all()->random()->id,
            'doctor_id' => Doctor::all()->random()->id,
            'status_id' => TreatmentStatus::all()->random()->id,
            'condition' => Str::random('10'),
        ];
    }
}
