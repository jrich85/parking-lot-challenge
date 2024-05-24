<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParkingSpot extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'is_occupied',
        'occupant_type',
        'floor',
        'sector',
    ];

    public function parkingLot(): HasOne
    {
        return $this->hasOne(ParkingLot::class);
    }
}
