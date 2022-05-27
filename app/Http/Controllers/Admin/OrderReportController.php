<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderReport;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderReportController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('order_report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderReports = OrderReport::all();

        return view('admin.orderReports.index', compact('orderReports'));
    }
}
