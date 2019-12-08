<?php

namespace App\Http\Requests;

use App\Pago;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePagoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('pago_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'usuario_cobra_id'     => [
                'required',
                'integer',
            ],
            'beneficiario_pago_id' => [
                'required',
                'integer',
            ],
            'fecha_pago'           => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'monto'                => [
                'required',
            ],
        ];
    }
}
