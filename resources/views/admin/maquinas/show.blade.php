@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.maquina.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.maquinas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.maquina.fields.id') }}
                        </th>
                        <td>
                            {{ $maquina->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.maquina.fields.codigo') }}
                        </th>
                        <td>
                            {{ $maquina->codigo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.maquina.fields.nombre') }}
                        </th>
                        <td>
                            {{ $maquina->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.maquina.fields.estado') }}
                        </th>
                        <td>
                            {{ $maquina->estado }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.maquina.fields.disponibilidad') }}
                        </th>
                        <td>
                            {{ App\Maquina::DISPONIBILIDAD_SELECT[$maquina->disponibilidad] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.maquinas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>


    </div>
</div>
@endsection