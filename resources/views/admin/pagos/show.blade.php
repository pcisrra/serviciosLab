@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pago.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pagos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pago.fields.id') }}
                        </th>
                        <td>
                            {{ $pago->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pago.fields.usuario_cobra') }}
                        </th>
                        <td>
                            {{ $pago->usuario_cobra->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pago.fields.beneficiario_pago') }}
                        </th>
                        <td>
                            {{ $pago->beneficiario_pago->ci ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pago.fields.fecha_pago') }}
                        </th>
                        <td>
                            {{ $pago->fecha_pago }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pago.fields.monto') }}
                        </th>
                        <td>
                            {{ $pago->monto }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pagos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>


    </div>
</div>
@endsection