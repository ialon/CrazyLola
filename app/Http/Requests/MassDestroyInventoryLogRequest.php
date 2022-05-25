<?php

namespace App\Http\Requests;

use App\Models\InventoryLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInventoryLogRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('inventory_log_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:inventory_logs,id',
        ];
    }
}
