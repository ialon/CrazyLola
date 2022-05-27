<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReport;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductReportController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productReports = ProductReport::all();

        return view('admin.productReports.index', compact('productReports'));
    }
}
