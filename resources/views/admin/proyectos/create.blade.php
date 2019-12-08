@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.proyecto.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.proyectos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="codigo_proyecto">{{ trans('cruds.proyecto.fields.codigo_proyecto') }}</label>
                <input class="form-control {{ $errors->has('codigo_proyecto') ? 'is-invalid' : '' }}" type="text" name="codigo_proyecto" id="codigo_proyecto" value="{{ old('codigo_proyecto', '') }}" required>
                @if($errors->has('codigo_proyecto'))
                    <span class="text-danger">{{ $errors->first('codigo_proyecto') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.codigo_proyecto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cliente_id">{{ trans('cruds.proyecto.fields.cliente') }}</label>
                <select class="form-control select2 {{ $errors->has('cliente') ? 'is-invalid' : '' }}" name="cliente_id" id="cliente_id" required>
                    @foreach($clientes as $id => $cliente)
                        <option value="{{ $id }}" {{ old('cliente_id') == $id ? 'selected' : '' }}>{{ $cliente }}</option>
                    @endforeach
                </select>
                @if($errors->has('cliente_id'))
                    <span class="text-danger">{{ $errors->first('cliente_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.cliente_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="maquina_asignada_id">{{ trans('cruds.proyecto.fields.maquina_asignada') }}</label>
                <select class="form-control select2 {{ $errors->has('maquina_asignada') ? 'is-invalid' : '' }}" name="maquina_asignada_id" id="maquina_asignada_id" required>
                    @foreach($maquina_asignadas as $id => $maquina_asignada)
                        <option value="{{ $id }}" {{ old('maquina_asignada_id') == $id ? 'selected' : '' }}>{{ $maquina_asignada }}</option>
                    @endforeach
                </select>
                @if($errors->has('maquina_asignada_id'))
                    <span class="text-danger">{{ $errors->first('maquina_asignada_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.maquina_asignada_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fecha_propuesta">{{ trans('cruds.proyecto.fields.fecha_propuesta') }}</label>
                <input class="form-control date {{ $errors->has('fecha_propuesta') ? 'is-invalid' : '' }}" type="text" name="fecha_propuesta" id="fecha_propuesta" value="{{ old('fecha_propuesta') }}" required>
                @if($errors->has('fecha_propuesta'))
                    <span class="text-danger">{{ $errors->first('fecha_propuesta') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.fecha_propuesta_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="usuario_acepta_id">{{ trans('cruds.proyecto.fields.usuario_acepta') }}</label>
                <select class="form-control select2 {{ $errors->has('usuario_acepta') ? 'is-invalid' : '' }}" name="usuario_acepta_id" id="usuario_acepta_id" required>
                    @foreach($usuario_aceptas as $id => $usuario_acepta)
                        <option value="{{ $id }}" {{ old('usuario_acepta_id') == $id ? 'selected' : '' }}>{{ $usuario_acepta }}</option>
                    @endforeach
                </select>
                @if($errors->has('usuario_acepta_id'))
                    <span class="text-danger">{{ $errors->first('usuario_acepta_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.usuario_acepta_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="usuario_cargo_id">{{ trans('cruds.proyecto.fields.usuario_cargo') }}</label>
                <select class="form-control select2 {{ $errors->has('usuario_cargo') ? 'is-invalid' : '' }}" name="usuario_cargo_id" id="usuario_cargo_id" required>
                    @foreach($usuario_cargos as $id => $usuario_cargo)
                        <option value="{{ $id }}" {{ old('usuario_cargo_id') == $id ? 'selected' : '' }}>{{ $usuario_cargo }}</option>
                    @endforeach
                </select>
                @if($errors->has('usuario_cargo_id'))
                    <span class="text-danger">{{ $errors->first('usuario_cargo_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.proyecto.fields.usuario_cargo_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>


    </div>
</div>
@endsection