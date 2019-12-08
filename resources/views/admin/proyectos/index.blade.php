@extends('layouts.admin')
@section('content')
@can('proyecto_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.proyectos.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.proyecto.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.proyecto.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Proyecto">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.codigo_proyecto') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.cliente') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.maquina_asignada') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.fecha_propuesta') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.usuario_acepta') }}
                        </th>
                        <th>
                            {{ trans('cruds.proyecto.fields.usuario_cargo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectos as $key => $proyecto)
                        <tr data-entry-id="{{ $proyecto->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $proyecto->id ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->codigo_proyecto ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->cliente->ci ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->maquina_asignada->codigo ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->fecha_propuesta ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->usuario_acepta->name ?? '' }}
                            </td>
                            <td>
                                {{ $proyecto->usuario_cargo->name ?? '' }}
                            </td>
                            <td>
                                @can('proyecto_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.proyectos.show', $proyecto->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('proyecto_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.proyectos.edit', $proyecto->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('proyecto_delete')
                                    <form action="{{ route('admin.proyectos.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('proyecto_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.proyectos.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Proyecto:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection