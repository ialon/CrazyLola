@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.orderLog.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.order-logs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="order">{{ trans('cruds.orderLog.fields.order') }}</label>
                <input class="form-control {{ $errors->has('order') ? 'is-invalid' : '' }}" type="text" name="order" id="order" value="{{ old('order', '') }}" required>
                @if($errors->has('order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderLog.fields.order_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="order_date">{{ trans('cruds.orderLog.fields.order_date') }}</label>
                <input class="form-control date {{ $errors->has('order_date') ? 'is-invalid' : '' }}" type="text" name="order_date" id="order_date" value="{{ old('order_date') }}" required>
                @if($errors->has('order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderLog.fields.order_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user">{{ trans('cruds.orderLog.fields.user') }}</label>
                <input class="form-control {{ $errors->has('user') ? 'is-invalid' : '' }}" type="text" name="user" id="user" value="{{ old('user', '') }}" required>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderLog.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="distributor">{{ trans('cruds.orderLog.fields.distributor') }}</label>
                <input class="form-control {{ $errors->has('distributor') ? 'is-invalid' : '' }}" type="text" name="distributor" id="distributor" value="{{ old('distributor', '') }}" required>
                @if($errors->has('distributor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('distributor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderLog.fields.distributor_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.orderLog.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', '') }}" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.orderLog.fields.status_helper') }}</span>
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