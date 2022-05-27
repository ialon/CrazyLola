<?php

namespace App\Http\Requests;

use App\Models\OrderReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_report_edit');
    }

    public function rules()
    {
        return [
            'order' => [
                'string',
                'required',
                'unique:order_reports,order,' . request()->route('order_report')->id,
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
