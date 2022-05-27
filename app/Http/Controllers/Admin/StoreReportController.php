<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StoreReport;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreReportController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('store_report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $storeReports = StoreReport::all();

        return view('admin.storeReports.index', compact('storeReports'));
    }
}
