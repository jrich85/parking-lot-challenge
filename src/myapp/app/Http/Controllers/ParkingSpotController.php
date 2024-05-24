<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParkingSpotRequest;
use App\Http\Requests\ParkingSpotRequestUnparkRequest;
use App\Http\Resources\ParkingSpotResource;
use App\Models\ParkingSpot;

class ParkingSpotController extends Controller
{
    public function index()
    {
        return ParkingSpotResource::collection(ParkingSpot::all());
    }

    public function park(ParkingSpotRequest $request, int $parkingSpot)
    {
        $parkingSpot = ParkingSpot::findOrFail($parkingSpot);
        $parkingSpot->update([
            'is_occupied' => true,
        ] + $request->validated());

        return new ParkingSpotResource($parkingSpot);
    }

    public function unpark(ParkingSpotRequestUnparkRequest $request, int $parkingSpot)
    {
        $parkingSpot = ParkingSpot::findOrFail($parkingSpot);
        $parkingSpot->update([
                'is_occupied' => false,
                'occupant_type' => null,
            ]);

        return new ParkingSpotResource($parkingSpot);
    }
}
