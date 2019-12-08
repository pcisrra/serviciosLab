@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.proyecto.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.proyectos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.id') }}
                        </th>
                        <td>
                            {{ $proyecto->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.codigo_proyecto') }}
                        </th>
                        <td>
                            {{ $proyecto->codigo_proyecto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.cliente') }}
                        </th>
                        <td>
                            {{ $proyecto->cliente->ci ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.maquina_asignada') }}
                        </th>
                        <td>
                            {{ $proyecto->maquina_asignada->codigo ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.fecha_propuesta') }}
                        </th>
                        <td>
                            {{ $proyecto->fecha_propuesta }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.usuario_acepta') }}
                        </th>
                        <td>
                            {{ $proyecto->usuario_acepta->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.proyecto.fields.usuario_cargo') }}
                        </th>
                        <td>
                            {{ $proyecto->usuario_cargo->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.proyectos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>


    </div>
</div>
@endsection