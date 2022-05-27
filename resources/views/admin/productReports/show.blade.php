@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productReport.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productReport.fields.id') }}
                        </th>
                        <td>
                            {{ $productReport->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReport.fields.product') }}
                        </th>
                        <td>
                            {{ $productReport->product }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReport.fields.stock') }}
                        </th>
                        <td>
                            {{ $productReport->stock }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReport.fields.unit_price') }}
                        </th>
                        <td>
                            {{ $productReport->unit_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReport.fields.total') }}
                        </th>
                        <td>
                            {{ $productReport->total }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-reports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection