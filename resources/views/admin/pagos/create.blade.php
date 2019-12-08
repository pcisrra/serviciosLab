@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pago.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pagos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="usuario_cobra_id">{{ trans('cruds.pago.fields.usuario_cobra') }}</label>
                <select class="form-control select2 {{ $errors->has('usuario_cobra') ? 'is-invalid' : '' }}" name="usuario_cobra_id" id="usuario_cobra_id" required>
                    @foreach($usuario_cobras as $id => $usuario_cobra)
                        <option value="{{ $id }}" {{ old('usuario_cobra_id') == $id ? 'selected' : '' }}>{{ $usuario_cobra }}</option>
                    @endforeach
                </select>
                @if($errors->has('usuario_cobra_id'))
                    <span class="text-danger">{{ $errors->first('usuario_cobra_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pago.fields.usuario_cobra_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="beneficiario_pago_id">{{ trans('cruds.pago.fields.beneficiario_pago') }}</label>
                <select class="form-control select2 {{ $errors->has('beneficiario_pago') ? 'is-invalid' : '' }}" name="beneficiario_pago_id" id="beneficiario_pago_id" required>
                    @foreach($beneficiario_pagos as $id => $beneficiario_pago)
                        <option value="{{ $id }}" {{ old('beneficiario_pago_id') == $id ? 'selected' : '' }}>{{ $beneficiario_pago }}</option>
                    @endforeach
                </select>
                @if($errors->has('beneficiario_pago_id'))
                    <span class="text-danger">{{ $errors->first('beneficiario_pago_id') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pago.fields.beneficiario_pago_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fecha_pago">{{ trans('cruds.pago.fields.fecha_pago') }}</label>
                <input class="form-control date {{ $errors->has('fecha_pago') ? 'is-invalid' : '' }}" type="text" name="fecha_pago" id="fecha_pago" value="{{ old('fecha_pago') }}" required>
                @if($errors->has('fecha_pago'))
                    <span class="text-danger">{{ $errors->first('fecha_pago') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pago.fields.fecha_pago_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="monto">{{ trans('cruds.pago.fields.monto') }}</label>
                <input class="form-control {{ $errors->has('monto') ? 'is-invalid' : '' }}" type="number" name="monto" id="monto" value="{{ old('monto') }}" step="0.01" required>
                @if($errors->has('monto'))
                    <span class="text-danger">{{ $errors->first('monto') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pago.fields.monto_helper') }}</span>
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