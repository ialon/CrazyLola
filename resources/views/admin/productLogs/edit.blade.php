@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.productLog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-logs.update", [$productLog->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="sku">{{ trans('cruds.productLog.fields.sku') }}</label>
                <input class="form-control {{ $errors->has('sku') ? 'is-invalid' : '' }}" type="text" name="sku" id="sku" value="{{ old('sku', $productLog->sku) }}" required>
                @if($errors->has('sku'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sku') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.sku_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.productLog.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $productLog->status) }}" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.productLog.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $productLog->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.productLog.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $productLog->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="unit_price">{{ trans('cruds.productLog.fields.unit_price') }}</label>
                <input class="form-control {{ $errors->has('unit_price') ? 'is-invalid' : '' }}" type="number" name="unit_price" id="unit_price" value="{{ old('unit_price', $productLog->unit_price) }}" step="0.01" required>
                @if($errors->has('unit_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.unit_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.productLog.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="number" name="weight" id="weight" value="{{ old('weight', $productLog->weight) }}" step="0.01">
                @if($errors->has('weight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="due_date">{{ trans('cruds.productLog.fields.due_date') }}</label>
                <input class="form-control date {{ $errors->has('due_date') ? 'is-invalid' : '' }}" type="text" name="due_date" id="due_date" value="{{ old('due_date', $productLog->due_date) }}">
                @if($errors->has('due_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('due_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.due_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="production_date">{{ trans('cruds.productLog.fields.production_date') }}</label>
                <input class="form-control datetime {{ $errors->has('production_date') ? 'is-invalid' : '' }}" type="text" name="production_date" id="production_date" value="{{ old('production_date', $productLog->production_date) }}">
                @if($errors->has('production_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('production_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productLog.fields.production_date_helper') }}</span>
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