<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beneficiario extends Model
{
    use SoftDeletes;

    public $table = 'beneficiarios';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'fecha_nacimiento',
    ];

    const TIPO_BENEFICIARIO_SELECT = [
        'academico'   => 'Académico/Investigador',
        'emprendedor' => 'Emprendedor/Empresario',
    ];

    protected $fillable = [
        'ci',
        'edad',
        'correo',
        'nombres',
        'celular',
        'ocupacion',
        'ap_paterno',
        'ap_materno',
        'created_at',
        'updated_at',
        'deleted_at',
        'zona_domicilio',
        'fecha_nacimiento',
        'tipo_beneficiario',
    ];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'cliente_id', 'id');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'beneficiario_pago_id', 'id');
    }

    public function getFechaNacimientoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
