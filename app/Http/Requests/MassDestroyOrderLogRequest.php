<?php

namespace App\Http\Requests;

use App\Models\OrderLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOrderLogRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_log_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:order_logs,id',
        ];
    }
}
