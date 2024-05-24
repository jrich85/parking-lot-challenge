<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParkingSpotRequest;
use App\Http\Resources\ParkingSpotResource;
use App\Models\ParkingSpot;

class ParkingSpotController extends Controller
{
    public function index()
    {
        return ParkingSpotResource::collection(ParkingSpot::all());
    }

    public function park(ParkingSpotRequest $request, ParkingSpot $parkingSpot)
    {
        $parkingSpot->update([
            'is_occupied' => false,
        ] + $request->validated());

        return new ParkingSpotResource($parkingSpot);
    }

    public function unpark(ParkingSpotRequest $request, ParkingSpot $parkingSpot)
    {
        $parkingSpot->update([
                'is_occupied' => false,
            ] + $request->validated());

        return new ParkingSpotResource($parkingSpot);
    }


}
