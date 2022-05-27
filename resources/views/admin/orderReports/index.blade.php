@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.orderReport.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OrderReport">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.orderReport.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderReport.fields.order') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderReport.fields.item_count') }}
                        </th>
                        <th>
                            {{ trans('cruds.orderReport.fields.total') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderReports as $key => $orderReport)
                        <tr data-entry-id="{{ $orderReport->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $orderReport->id ?? '' }}
                            </td>
                            <td>
                                {{ $orderReport->order ?? '' }}
                            </td>
                            <td>
                                {{ $orderReport->item_count ?? '' }}
                            </td>
                            <td>
                                {{ $orderReport->total ?? '' }}
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
  let table = $('.datatable-OrderReport:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection