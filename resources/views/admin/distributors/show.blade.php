@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.distributor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.distributors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.distributor.fields.id') }}
                        </th>
                        <td>
                            {{ $distributor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.distributor.fields.name') }}
                        </th>
                        <td>
                            {{ $distributor->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.distributor.fields.description') }}
                        </th>
                        <td>
                            {{ $distributor->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.distributor.fields.location') }}
                        </th>
                        <td>
                            {{ $distributor->location->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.distributors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#distributor_orders" role="tab" data-toggle="tab">
                {{ trans('cruds.order.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="distributor_orders">
            @includeIf('admin.distributors.relationships.distributorOrders', ['orders' => $distributor->distributorOrders])
        </div>
    </div>
</div>

@endsection