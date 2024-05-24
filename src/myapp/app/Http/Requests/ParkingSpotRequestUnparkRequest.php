<?php

namespace App\Http\Requests;

use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParkingSpotRequestUnparkRequest extends FormRequest
{
    public function rules(): array
    {
        $this->merge(['parkingSpot' => $this->route('parkingSpot')]);
        return [
            'parkingSpot' => [
                Rule::exists('parking_spots','id')
                    ->where(fn (Builder $query) => $query->where('is_occupied', true))
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
