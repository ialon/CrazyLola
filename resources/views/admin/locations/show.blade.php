@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.location.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.locations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.id') }}
                        </th>
                        <td>
                            {{ $location->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.name') }}
                        </th>
                        <td>
                            {{ $location->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.country') }}
                        </th>
                        <td>
                            {{ $location->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.state') }}
                        </th>
                        <td>
                            {{ $location->state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.city') }}
                        </th>
                        <td>
                            {{ $location->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.address') }}
                        </th>
                        <td>
                            {{ $location->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.details') }}
                        </th>
                        <td>
                            {{ $location->details }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.location.fields.postal_code') }}
                        </th>
                        <td>
                            {{ $location->postal_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.locations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection