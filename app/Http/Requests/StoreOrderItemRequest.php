<?php

namespace App\Http\Requests;

use App\Models\OrderItem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_item_create');
    }

    public function rules()
    {
        return [
            'unit_price' => [
                'required',
            ],
            'quantity' => [
                'numeric',
                'required',
            ],
            'order_id' => [
                'required',
                'integer',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
