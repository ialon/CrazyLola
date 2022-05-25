@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.orderLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OrderLog">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.order') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.order_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.distributor') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderLog.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderLogs as $key => $orderLog)
                        <tr data-entry-id="{{ $orderLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $orderLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $orderLog->order ?? '' }}
                            </td>
                            <td>
                                {{ $orderLog->order_date ?? '' }}
                            </td>
                            <td>
                                {{ $orderLog->user ?? '' }}
                            </td>
                            <td>
                                {{ $orderLog->distributor ?? '' }}
                            </td>
                            <td>
                                {{ $orderLog->status ?? '' }}
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
  let table = $('.datatable-OrderLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection