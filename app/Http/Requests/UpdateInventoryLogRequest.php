<?php

namespace App\Http\Requests;

use App\Models\InventoryLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInventoryLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_log_edit');
    }

    public function rules()
    {
        return [
            'inventory' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'quantity' => [
                'numeric',
                'required',
            ],
            'store' => [
                'string',
                'required',
            ],
            'product' => [
                'string',
                'required',
            ],
        ];
    }
}
