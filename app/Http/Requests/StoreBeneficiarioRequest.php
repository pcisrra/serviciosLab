<?php

namespace App\Http\Requests;

use App\Beneficiario;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreBeneficiarioRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('beneficiario_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ci'                => [
                'max:10',
                'required',
            ],
            'nombres'           => [
                'required',
            ],
            'ap_paterno'        => [
                'required',
            ],
            'fecha_nacimiento'  => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'edad'              => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'celular'           => [
                'max:8',
            ],
            'tipo_beneficiario' => [
                'required',
            ],
        ];
    }
}
