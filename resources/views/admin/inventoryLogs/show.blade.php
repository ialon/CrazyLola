@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inventoryLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inventory-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.id') }}
                        </th>
                        <td>
                            {{ $inventoryLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.inventory') }}
                        </th>
                        <td>
                            {{ $inventoryLog->inventory }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.quantity') }}
                        </th>
                        <td>
                            {{ $inventoryLog->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.store') }}
                        </th>
                        <td>
                            {{ $inventoryLog->store }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.product') }}
                        </th>
                        <td>
                            {{ $inventoryLog->product }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.inventory-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection