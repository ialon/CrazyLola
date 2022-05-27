<?php

namespace App\Http\Requests;

use App\Models\OrderReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_report_create');
    }

    public function rules()
    {
        return [
            'order' => [
                'string',
                'required',
                'unique:order_reports',
            ],
            'item_count' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
