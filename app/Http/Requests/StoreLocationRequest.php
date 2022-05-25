<?php

namespace App\Http\Requests;

use App\Models\Location;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('location_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:locations',
            ],
            'country' => [
                'string',
                'required',
            ],
            'state' => [
                'string',
                'required',
            ],
            'city' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'details' => [
                'string',
                'nullable',
            ],
            'postal_code' => [
                'string',
                'nullable',
            ],
        ];
    }
}
