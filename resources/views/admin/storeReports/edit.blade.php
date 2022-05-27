@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.storeReport.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.store-reports.update", [$storeReport->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="store">{{ trans('cruds.storeReport.fields.store') }}</label>
                <input class="form-control {{ $errors->has('store') ? 'is-invalid' : '' }}" type="text" name="store" id="store" value="{{ old('store', $storeReport->store) }}" required>
                @if($errors->has('store'))
                    <div class="invalid-feedback">
                        {{ $errors->first('store') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.storeReport.fields.store_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="products">{{ trans('cruds.storeReport.fields.products') }}</label>
                <input class="form-control {{ $errors->has('products') ? 'is-invalid' : '' }}" type="number" name="products" id="products" value="{{ old('products', $storeReport->products) }}" step="1">
                @if($errors->has('products'))
                    <div class="invalid-feedback">
                        {{ $errors->first('products') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.storeReport.fields.products_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="orders">{{ trans('cruds.storeReport.fields.orders') }}</label>
                <input class="form-control {{ $errors->has('orders') ? 'is-invalid' : '' }}" type="number" name="orders" id="orders" value="{{ old('orders', $storeReport->orders) }}" step="1">
                @if($errors->has('orders'))
                    <div class="invalid-feedback">
                        {{ $errors->first('orders') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.storeReport.fields.orders_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total">{{ trans('cruds.storeReport.fields.total') }}</label>
                <input class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" type="number" name="total" id="total" value="{{ old('total', $storeReport->total) }}" step="0.01">
                @if($errors->has('total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.storeReport.fields.total_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection