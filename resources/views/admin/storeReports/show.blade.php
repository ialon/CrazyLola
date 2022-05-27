@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.storeReport.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.store-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.storeReport.fields.id') }}
                        </th>
                        <td>
                            {{ $storeReport->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.storeReport.fields.store') }}
                        </th>
                        <td>
                            {{ $storeReport->store }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.storeReport.fields.products') }}
                        </th>
                        <td>
                            {{ $storeReport->products }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.storeReport.fields.orders') }}
                        </th>
                        <td>
                            {{ $storeReport->orders }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.storeReport.fields.total') }}
                        </th>
                        <td>
                            {{ $storeReport->total }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.store-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection