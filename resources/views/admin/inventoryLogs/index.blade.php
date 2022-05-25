@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.inventoryLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-InventoryLog">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.inventory') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.quantity') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.store') }}
                        </th>
                        <th>
                            {{ trans('cruds.inventoryLog.fields.product') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventoryLogs as $key => $inventoryLog)
                        <tr data-entry-id="{{ $inventoryLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $inventoryLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $inventoryLog->inventory ?? '' }}
                            </td>
                            <td>
                                {{ $inventoryLog->quantity ?? '' }}
                            </td>
                            <td>
                                {{ $inventoryLog->store ?? '' }}
                            </td>
                            <td>
                                {{ $inventoryLog->product ?? '' }}
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
  let table = $('.datatable-InventoryLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection