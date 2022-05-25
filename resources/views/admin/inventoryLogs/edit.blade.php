@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.inventoryLog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.inventory-logs.update", [$inventoryLog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="inventory">{{ trans('cruds.inventoryLog.fields.inventory') }}</label>
                <input class="form-control {{ $errors->has('inventory') ? 'is-invalid' : '' }}" type="number" name="inventory" id="inventory" value="{{ old('inventory', $inventoryLog->inventory) }}" step="1" required>
                @if($errors->has('inventory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inventory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventoryLog.fields.inventory_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.inventoryLog.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $inventoryLog->quantity) }}" step="0.01" required>
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventoryLog.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="store">{{ trans('cruds.inventoryLog.fields.store') }}</label>
                <input class="form-control {{ $errors->has('store') ? 'is-invalid' : '' }}" type="text" name="store" id="store" value="{{ old('store', $inventoryLog->store) }}" required>
                @if($errors->has('store'))
                    <div class="invalid-feedback">
                        {{ $errors->first('store') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventoryLog.fields.store_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="product">{{ trans('cruds.inventoryLog.fields.product') }}</label>
                <input class="form-control {{ $errors->has('product') ? 'is-invalid' : '' }}" type="text" name="product" id="product" value="{{ old('product', $inventoryLog->product) }}" required>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inventoryLog.fields.product_helper') }}</span>
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