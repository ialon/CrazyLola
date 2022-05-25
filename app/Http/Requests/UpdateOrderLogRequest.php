<?php

namespace App\Http\Requests;

use App\Models\OrderLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_log_edit');
    }

    public function rules()
    {
        return [
            'order' => [
                'string',
                'required',
            ],
            'order_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'user' => [
                'string',
                'required',
            ],
            'distributor' => [
                'string',
                'required',
            ],
            'status' => [
                'string',
                'required',
            ],
        ];
    }
}
