<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\ParkingLot */
class ParkingLotResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'parking_spots' => $this->parkingSpots(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
