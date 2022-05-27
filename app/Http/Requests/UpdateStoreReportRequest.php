<?php

namespace App\Http\Requests;

use App\Models\StoreReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStoreReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('store_report_edit');
    }

    public function rules()
    {
        return [
            'store' => [
                'string',
                'required',
                'unique:store_reports,store,' . request()->route('store_report')->id,
            ],
            'products' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'orders' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
