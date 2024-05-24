<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ParkingLot;
use App\Models\ParkingSpot;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $parkingLot = ParkingLot::factory()->create([
            'name' => 'Test User',
        ]);


        ParkingSpot::factory()
            ->count(10)
            ->create([
                'parking_lot_id' => $parkingLot->id,
                'floor' => 1,
                'sector' => 'A',
            ]);

        ParkingSpot::factory()
            ->count(10)
            ->create([
                'parking_lot_id' => $parkingLot->id,
                'floor' => 1,
                'sector' => 'B',
            ]);

        ParkingSpot::factory()
            ->count(10)
            ->create([
                'parking_lot_id' => $parkingLot->id,
                'floor' => 1,
                'sector' => 'C',
            ]);

        ParkingSpot::factory()
            ->count(10)
            ->create([
                'parking_lot_id' => $parkingLot->id,
                'floor' => 1,
                'sector' => 'D',
            ]);


    }
}
