<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParkingSpotRequest extends FormRequest
{
    public function rules()
    {
        return [
            'occupant_type' => ['optional', Rule::in(['car', 'motorcycle', 'van'])],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
