<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParkingLot extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
    ];

    public function parkingSpots(): HasMany
    {
        return $this->hasMany(ParkingSpot::class);
    }
}
