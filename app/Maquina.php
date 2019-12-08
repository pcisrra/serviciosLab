<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maquina extends Model
{
    use SoftDeletes;

    public $table = 'maquinas';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const DISPONIBILIDAD_SELECT = [
        'libre'   => 'Libre',
        'ocupado' => 'Ocupado',
    ];

    protected $fillable = [
        'codigo',
        'nombre',
        'estado',
        'created_at',
        'updated_at',
        'deleted_at',
        'disponibilidad',
    ];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'maquina_asignada_id', 'id');
    }
}
