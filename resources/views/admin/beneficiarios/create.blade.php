@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.beneficiario.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.beneficiarios.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="ci">{{ trans('cruds.beneficiario.fields.ci') }}</label>
                <input class="form-control {{ $errors->has('ci') ? 'is-invalid' : '' }}" type="text" name="ci" id="ci" value="{{ old('ci', '') }}" required>
                @if($errors->has('ci'))
                    <span class="text-danger">{{ $errors->first('ci') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.ci_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombres">{{ trans('cruds.beneficiario.fields.nombres') }}</label>
                <input class="form-control {{ $errors->has('nombres') ? 'is-invalid' : '' }}" type="text" name="nombres" id="nombres" value="{{ old('nombres', '') }}" required>
                @if($errors->has('nombres'))
                    <span class="text-danger">{{ $errors->first('nombres') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.nombres_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ap_paterno">{{ trans('cruds.beneficiario.fields.ap_paterno') }}</label>
                <input class="form-control {{ $errors->has('ap_paterno') ? 'is-invalid' : '' }}" type="text" name="ap_paterno" id="ap_paterno" value="{{ old('ap_paterno', '') }}" required>
                @if($errors->has('ap_paterno'))
                    <span class="text-danger">{{ $errors->first('ap_paterno') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.ap_paterno_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ap_materno">{{ trans('cruds.beneficiario.fields.ap_materno') }}</label>
                <input class="form-control {{ $errors->has('ap_materno') ? 'is-invalid' : '' }}" type="text" name="ap_materno" id="ap_materno" value="{{ old('ap_materno', '') }}">
                @if($errors->has('ap_materno'))
                    <span class="text-danger">{{ $errors->first('ap_materno') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.ap_materno_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fecha_nacimiento">{{ trans('cruds.beneficiario.fields.fecha_nacimiento') }}</label>
                <input class="form-control date {{ $errors->has('fecha_nacimiento') ? 'is-invalid' : '' }}" type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                @if($errors->has('fecha_nacimiento'))
                    <span class="text-danger">{{ $errors->first('fecha_nacimiento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.fecha_nacimiento_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="edad">{{ trans('cruds.beneficiario.fields.edad') }}</label>
                <input class="form-control {{ $errors->has('edad') ? 'is-invalid' : '' }}" type="number" name="edad" id="edad" value="{{ old('edad') }}" step="1">
                @if($errors->has('edad'))
                    <span class="text-danger">{{ $errors->first('edad') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.edad_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="correo">{{ trans('cruds.beneficiario.fields.correo') }}</label>
                <input class="form-control {{ $errors->has('correo') ? 'is-invalid' : '' }}" type="text" name="correo" id="correo" value="{{ old('correo', '') }}">
                @if($errors->has('correo'))
                    <span class="text-danger">{{ $errors->first('correo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.correo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="celular">{{ trans('cruds.beneficiario.fields.celular') }}</label>
                <input class="form-control {{ $errors->has('celular') ? 'is-invalid' : '' }}" type="text" name="celular" id="celular" value="{{ old('celular', '') }}">
                @if($errors->has('celular'))
                    <span class="text-danger">{{ $errors->first('celular') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.celular_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="zona_domicilio">{{ trans('cruds.beneficiario.fields.zona_domicilio') }}</label>
                <input class="form-control {{ $errors->has('zona_domicilio') ? 'is-invalid' : '' }}" type="text" name="zona_domicilio" id="zona_domicilio" value="{{ old('zona_domicilio', '') }}">
                @if($errors->has('zona_domicilio'))
                    <span class="text-danger">{{ $errors->first('zona_domicilio') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.zona_domicilio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ocupacion">{{ trans('cruds.beneficiario.fields.ocupacion') }}</label>
                <input class="form-control {{ $errors->has('ocupacion') ? 'is-invalid' : '' }}" type="text" name="ocupacion" id="ocupacion" value="{{ old('ocupacion', '') }}">
                @if($errors->has('ocupacion'))
                    <span class="text-danger">{{ $errors->first('ocupacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.ocupacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.beneficiario.fields.tipo_beneficiario') }}</label>
                <select class="form-control {{ $errors->has('tipo_beneficiario') ? 'is-invalid' : '' }}" name="tipo_beneficiario" id="tipo_beneficiario" required>
                    <option value disabled {{ old('tipo_beneficiario', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Beneficiario::TIPO_BENEFICIARIO_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('tipo_beneficiario', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('tipo_beneficiario'))
                    <span class="text-danger">{{ $errors->first('tipo_beneficiario') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.beneficiario.fields.tipo_beneficiario_helper') }}</span>
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