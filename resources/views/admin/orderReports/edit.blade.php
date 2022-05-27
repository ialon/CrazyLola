@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.orderReport.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-reports.update", [$orderReport->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="order">{{ trans('cruds.orderReport.fields.order') }}</label>
                <input class="form-control {{ $errors->has('order') ? 'is-invalid' : '' }}" type="text" name="order" id="order" value="{{ old('order', $orderReport->order) }}" required>
                @if($errors->has('order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderReport.fields.order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="item_count">{{ trans('cruds.orderReport.fields.item_count') }}</label>
                <input class="form-control {{ $errors->has('item_count') ? 'is-invalid' : '' }}" type="number" name="item_count" id="item_count" value="{{ old('item_count', $orderReport->item_count) }}" step="1">
                @if($errors->has('item_count'))
                    <div class="invalid-feedback">
                        {{ $errors->first('item_count') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderReport.fields.item_count_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="total">{{ trans('cruds.orderReport.fields.total') }}</label>
                <input class="form-control {{ $errors->has('total') ? 'is-invalid' : '' }}" type="number" name="total" id="total" value="{{ old('total', $orderReport->total) }}" step="0.01">
                @if($errors->has('total'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderReport.fields.total_helper') }}</span>
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