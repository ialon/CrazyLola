<?php

namespace App\Http\Requests;

use App\Models\ProductReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProductReportRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('product_report_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:product_reports,id',
        ];
    }
}
