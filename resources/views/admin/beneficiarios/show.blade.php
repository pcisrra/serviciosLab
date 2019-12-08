@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.beneficiario.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.beneficiarios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.id') }}
                        </th>
                        <td>
                            {{ $beneficiario->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.ci') }}
                        </th>
                        <td>
                            {{ $beneficiario->ci }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.nombres') }}
                        </th>
                        <td>
                            {{ $beneficiario->nombres }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.ap_paterno') }}
                        </th>
                        <td>
                            {{ $beneficiario->ap_paterno }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.ap_materno') }}
                        </th>
                        <td>
                            {{ $beneficiario->ap_materno }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.fecha_nacimiento') }}
                        </th>
                        <td>
                            {{ $beneficiario->fecha_nacimiento }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.edad') }}
                        </th>
                        <td>
                            {{ $beneficiario->edad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.correo') }}
                        </th>
                        <td>
                            {{ $beneficiario->correo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.celular') }}
                        </th>
                        <td>
                            {{ $beneficiario->celular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.zona_domicilio') }}
                        </th>
                        <td>
                            {{ $beneficiario->zona_domicilio }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.ocupacion') }}
                        </th>
                        <td>
                            {{ $beneficiario->ocupacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.beneficiario.fields.tipo_beneficiario') }}
                        </th>
                        <td>
                            {{ App\Beneficiario::TIPO_BENEFICIARIO_SELECT[$beneficiario->tipo_beneficiario] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.beneficiarios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>


    </div>
</div>
@endsection