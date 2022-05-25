<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderLog;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderLogs = OrderLog::all();

        return view('admin.orderLogs.index', compact('orderLogs'));
    }
}
