@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.productReport.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ProductReport">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.productReport.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.productReport.fields.product') }}
                        </th>
                        <th>
                            {{ trans('cruds.productReport.fields.stock') }}
                        </th>
                        <th>
                            {{ trans('cruds.productReport.fields.unit_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.productReport.fields.total') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productReports as $key => $productReport)
                        <tr data-entry-id="{{ $productReport->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $productReport->id ?? '' }}
                            </td>
                            <td>
                                {{ $productReport->product ?? '' }}
                            </td>
                            <td>
                                {{ $productReport->stock ?? '' }}
                            </td>
                            <td>
                                {{ $productReport->unit_price ?? '' }}
                            </td>
                            <td>
                                {{ $productReport->total ?? '' }}
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
  let table = $('.datatable-ProductReport:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection