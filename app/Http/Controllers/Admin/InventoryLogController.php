<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InventoryLog;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InventoryLogController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inventory_log_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventoryLogs = InventoryLog::all();

        return view('admin.inventoryLogs.index', compact('inventoryLogs'));
    }
}
