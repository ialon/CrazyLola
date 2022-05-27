@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.storeReport.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-StoreReport">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.storeReport.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.storeReport.fields.store') }}
                        </th>
                        <th>
                            {{ trans('cruds.storeReport.fields.products') }}
                        </th>
                        <th>
                            {{ trans('cruds.storeReport.fields.orders') }}
                        </th>
                        <th>
                            {{ trans('cruds.storeReport.fields.total') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($storeReports as $key => $storeReport)
                        <tr data-entry-id="{{ $storeReport->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $storeReport->id ?? '' }}
                            </td>
                            <td>
                                {{ $storeReport->store ?? '' }}
                            </td>
                            <td>
                                {{ $storeReport->products ?? '' }}
                            </td>
                            <td>
                                {{ $storeReport->orders ?? '' }}
                            </td>
                            <td>
                                {{ $storeReport->total ?? '' }}
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
  let table = $('.datatable-StoreReport:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection