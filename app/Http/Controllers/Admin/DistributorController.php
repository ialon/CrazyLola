<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDistributorRequest;
use App\Http\Requests\StoreDistributorRequest;
use App\Http\Requests\UpdateDistributorRequest;
use App\Models\Distributor;
use App\Models\Location;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DistributorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('distributor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $distributors = Distributor::with(['location'])->get();

        return view('admin.distributors.index', compact('distributors'));
    }

    public function create()
    {
        abort_if(Gate::denies('distributor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locations = Location::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.distributors.create', compact('locations'));
    }

    public function store(StoreDistributorRequest $request)
    {
        $distributor = Distributor::create($request->all());

        return redirect()->route('admin.distributors.index');
    }

    public function edit(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locations = Location::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $distributor->load('location');

        return view('admin.distributors.edit', compact('distributor', 'locations'));
    }

    public function update(UpdateDistributorRequest $request, Distributor $distributor)
    {
        $distributor->update($request->all());

        return redirect()->route('admin.distributors.index');
    }

    public function show(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $distributor->load('location', 'distributorOrders');

        return view('admin.distributors.show', compact('distributor'));
    }

    public function destroy(Distributor $distributor)
    {
        abort_if(Gate::denies('distributor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $distributor->delete();

        return back();
    }

    public function massDestroy(MassDestroyDistributorRequest $request)
    {
        Distributor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
