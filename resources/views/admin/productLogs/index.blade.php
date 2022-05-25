@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.productLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ProductLog">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.sku') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.unit_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.weight') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.due_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.productLog.fields.production_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productLogs as $key => $productLog)
                        <tr data-entry-id="{{ $productLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $productLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->sku ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->status ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->name ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->description ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->unit_price ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->weight ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->due_date ?? '' }}
                            </td>
                            <td>
                                {{ $productLog->production_date ?? '' }}
                            </td>
                            <td>



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ProductLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection