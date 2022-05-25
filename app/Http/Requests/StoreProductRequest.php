<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'sku' => [
                'string',
                'required',
                'unique:products',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'unit_price' => [
                'required',
            ],
            'weight' => [
                'numeric',
            ],
            'due_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'production_date' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
