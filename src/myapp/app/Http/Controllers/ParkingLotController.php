<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParkingLotResource;
use App\Models\ParkingLot;
use Illuminate\Http\Request;

class ParkingLotController extends Controller
{
    public function index()
    {
        return ParkingLotResource::collection(ParkingLot::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return new ParkingLotResource(ParkingLot::create($data));
    }

    public function show(ParkingLot $parkingLot)
    {
        return new ParkingLotResource($parkingLot);
    }

    public function update(Request $request, ParkingLot $parkingLot)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $parkingLot->update($data);

        return new ParkingLotResource($parkingLot);
    }

    public function destroy(ParkingLot $parkingLot)
    {
        $parkingLot->delete();

        return response()->json();
    }
}
