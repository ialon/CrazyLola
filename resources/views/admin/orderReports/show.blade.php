@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.orderReport.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.orderReport.fields.id') }}
                        </th>
                        <td>
                            {{ $orderReport->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderReport.fields.order') }}
                        </th>
                        <td>
                            {{ $orderReport->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderReport.fields.item_count') }}
                        </th>
                        <td>
                            {{ $orderReport->item_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.orderReport.fields.total') }}
                        </th>
                        <td>
                            {{ $orderReport->total }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.order-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection