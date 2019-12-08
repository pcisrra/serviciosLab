<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use SoftDeletes;

    public $table = 'proyectos';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'fecha_propuesta',
    ];

    protected $fillable = [
        'created_at',
        'cliente_id',
        'updated_at',
        'deleted_at',
        'codigo_proyecto',
        'fecha_propuesta',
        'usuario_cargo_id',
        'usuario_acepta_id',
        'maquina_asignada_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Beneficiario::class, 'cliente_id');
    }

    public function maquina_asignada()
    {
        return $this->belongsTo(Maquina::class, 'maquina_asignada_id');
    }

    public function getFechaPropuestaAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaPropuestaAttribute($value)
    {
        $this->attributes['fecha_propuesta'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function usuario_acepta()
    {
        return $this->belongsTo(User::class, 'usuario_acepta_id');
    }

    public function usuario_cargo()
    {
        return $this->belongsTo(User::class, 'usuario_cargo_id');
    }
}
