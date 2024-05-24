<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\ParkingSpot */
class ParkingSpotResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'is_occupied' => $this->is_occupied,
            'occupant_type' => $this->occupant_type,
            'floor' => $this->floor,
            'sector' => $this->sector,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
