<?php

namespace Database\Factories;

use App\Models\ParkingSpot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ParkingSpotFactory extends Factory
{
    protected $model = ParkingSpot::class;

    public function definition()
    {
        return [
            'is_occupied' => $this->faker->boolean(),
            'occupant_type' => $this->faker->word(),
            'floor' => $this->faker->randomNumber(),
            'sector' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
