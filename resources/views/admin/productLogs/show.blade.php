@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.id') }}
                        </th>
                        <td>
                            {{ $productLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.sku') }}
                        </th>
                        <td>
                            {{ $productLog->sku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.status') }}
                        </th>
                        <td>
                            {{ $productLog->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.name') }}
                        </th>
                        <td>
                            {{ $productLog->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.description') }}
                        </th>
                        <td>
                            {{ $productLog->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.unit_price') }}
                        </th>
                        <td>
                            {{ $productLog->unit_price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.weight') }}
                        </th>
                        <td>
                            {{ $productLog->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.due_date') }}
                        </th>
                        <td>
                            {{ $productLog->due_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productLog.fields.production_date') }}
                        </th>
                        <td>
                            {{ $productLog->production_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection