<?php

namespace App\Http\Requests;

use App\Models\StoreReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStoreReportRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('store_report_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:store_reports,id',
        ];
    }
}
