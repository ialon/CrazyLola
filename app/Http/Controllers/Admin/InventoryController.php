<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInventoryRequest;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Store;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InventoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inventory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventories = Inventory::with(['store', 'product'])->get();

        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        abort_if(Gate::denies('inventory_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stores = Store::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('sku', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.inventories.create', compact('products', 'stores'));
    }

    public function store(StoreInventoryRequest $request)
    {
        $inventory = Inventory::create($request->all());

        return redirect()->route('admin.inventories.index');
    }

    public function edit(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stores = Store::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('sku', 'id')->prepend(trans('global.pleaseSelect'), '');

        $inventory->load('store', 'product');

        return view('admin.inventories.edit', compact('inventory', 'products', 'stores'));
    }

    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return redirect()->route('admin.inventories.index');
    }

    public function show(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventory->load('store', 'product');

        return view('admin.inventories.show', compact('inventory'));
    }

    public function destroy(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventory->delete();

        return back();
    }

    public function massDestroy(MassDestroyInventoryRequest $request)
    {
        Inventory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
