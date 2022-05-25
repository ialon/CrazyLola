<?php

namespace App\Http\Requests;

use App\Models\Distributor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDistributorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('distributor_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'location_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
