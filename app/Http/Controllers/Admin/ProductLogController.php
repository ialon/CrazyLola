<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductLog;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('product_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $productLogs = ProductLog::all();

        return view('admin.productLogs.index', compact('productLogs'));
    }
}
