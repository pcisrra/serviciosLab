@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.maquina.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.maquinas.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="codigo">{{ trans('cruds.maquina.fields.codigo') }}</label>
                <input class="form-control {{ $errors->has('codigo') ? 'is-invalid' : '' }}" type="text" name="codigo" id="codigo" value="{{ old('codigo', '') }}" required>
                @if($errors->has('codigo'))
                    <span class="text-danger">{{ $errors->first('codigo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.maquina.fields.codigo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre">{{ trans('cruds.maquina.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                @if($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.maquina.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="estado">{{ trans('cruds.maquina.fields.estado') }}</label>
                <input class="form-control {{ $errors->has('estado') ? 'is-invalid' : '' }}" type="text" name="estado" id="estado" value="{{ old('estado', '') }}">
                @if($errors->has('estado'))
                    <span class="text-danger">{{ $errors->first('estado') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.maquina.fields.estado_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.maquina.fields.disponibilidad') }}</label>
                <select class="form-control {{ $errors->has('disponibilidad') ? 'is-invalid' : '' }}" name="disponibilidad" id="disponibilidad">
                    <option value disabled {{ old('disponibilidad', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Maquina::DISPONIBILIDAD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('disponibilidad', 'Libre') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('disponibilidad'))
                    <span class="text-danger">{{ $errors->first('disponibilidad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.maquina.fields.disponibilidad_helper') }}</span>
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