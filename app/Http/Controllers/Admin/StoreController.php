<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStoreRequest;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Models\Location;
use App\Models\Store;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('store_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stores = Store::with(['location'])->get();

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        abort_if(Gate::denies('store_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locations = Location::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.stores.create', compact('locations'));
    }

    public function store(StoreStoreRequest $request)
    {
        $store = Store::create($request->all());

        return redirect()->route('admin.stores.index');
    }

    public function edit(Store $store)
    {
        abort_if(Gate::denies('store_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locations = Location::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $store->load('location');

        return view('admin.stores.edit', compact('locations', 'store'));
    }

    public function update(UpdateStoreRequest $request, Store $store)
    {
        $store->update($request->all());

        return redirect()->route('admin.stores.index');
    }

    public function show(Store $store)
    {
        abort_if(Gate::denies('store_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $store->load('location', 'storeInventories');

        return view('admin.stores.show', compact('store'));
    }

    public function destroy(Store $store)
    {
        abort_if(Gate::denies('store_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $store->delete();

        return back();
    }

    public function massDestroy(MassDestroyStoreRequest $request)
    {
        Store::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
