@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.orderLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.id') }}
                        </th>
                        <td>
                            {{ $orderLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.order') }}
                        </th>
                        <td>
                            {{ $orderLog->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.order_date') }}
                        </th>
                        <td>
                            {{ $orderLog->order_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.user') }}
                        </th>
                        <td>
                            {{ $orderLog->user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.distributor') }}
                        </th>
                        <td>
                            {{ $orderLog->distributor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderLog.fields.status') }}
                        </th>
                        <td>
                            {{ $orderLog->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection