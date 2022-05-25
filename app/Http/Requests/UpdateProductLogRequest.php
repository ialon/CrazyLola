<?php

namespace App\Http\Requests;

use App\Models\ProductLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_log_edit');
    }

    public function rules()
    {
        return [
            'sku' => [
                'string',
                'required',
            ],
            'status' => [
                'string',
                'required',
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
