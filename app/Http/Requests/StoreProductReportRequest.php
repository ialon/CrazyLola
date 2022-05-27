<?php

namespace App\Http\Requests;

use App\Models\ProductReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_report_create');
    }

    public function rules()
    {
        return [
            'product' => [
                'string',
                'required',
                'unique:product_reports',
            ],
            'stock' => [
                'numeric',
            ],
        ];
    }
}
