@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.orders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="order_date">{{ trans('cruds.order.fields.order_date') }}</label>
                <input class="form-control date {{ $errors->has('order_date') ? 'is-invalid' : '' }}" type="text" name="order_date" id="order_date" value="{{ old('order_date') }}" required>
                @if($errors->has('order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.order_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.order.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="distributor_id">{{ trans('cruds.order.fields.distributor') }}</label>
                <select class="form-control select2 {{ $errors->has('distributor') ? 'is-invalid' : '' }}" name="distributor_id" id="distributor_id" required>
                    @foreach($distributors as $id => $entry)
                        <option value="{{ $id }}" {{ old('distributor_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('distributor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('distributor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.distributor_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.order.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.status_helper') }}</span>
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