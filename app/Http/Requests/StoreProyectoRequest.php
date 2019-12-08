<?php

namespace App\Http\Requests;

use App\Proyecto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreProyectoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('proyecto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'codigo_proyecto'     => [
                'required',
            ],
            'cliente_id'          => [
                'required',
                'integer',
            ],
            'maquina_asignada_id' => [
                'required',
                'integer',
            ],
            'fecha_propuesta'     => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'usuario_acepta_id'   => [
                'required',
                'integer',
            ],
            'usuario_cargo_id'    => [
                'required',
                'integer',
            ],
        ];
    }
}
