@extends('layouts.admin')
@section('content')
@can('blood_pressure_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.healthcare.blood-pressures.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.blood_pressure.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.blood_pressure.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-blood-pressure">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.title') . trans('cruds.user.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.measured_in') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.measured_at') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.diastolic_pressure') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.systolic_pressure') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.pulse_pressure') }}
                        </th>
                        <th>
                            {{ trans('cruds.blood_pressure.fields.remark') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bloodPressures as $key => $bloodPressure)
                        <tr data-entry-id="{{ $bloodPressure->id }}">
                            <td>
                            </td>
                            <td>
                                {{ $bloodPressure->user_id ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->measured_in ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->measured_at ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->diastolic_pressure ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->systolic_pressure ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->pulse_pressure ?? '' }}
                            </td>
                            <td>
                                {{ $bloodPressure->remark ?? '' }}
                            </td>
                            <td>
                                @can('blood_pressure_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.healthcare.blood-pressures.show', $bloodPressure->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('blood_pressure_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.healthcare.blood-pressures.edit', $bloodPressure->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('blood_pressure_delete')
                                    <form action="{{ route('admin.healthcare.blood-pressures.destroy', $bloodPressure->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

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
@can('blood_pressure_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.healthcare.blood-pressures.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-blood-pressure:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection