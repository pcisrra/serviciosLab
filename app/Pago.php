<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pago extends Model
{
    use SoftDeletes;

    public $table = 'pagos';

    protected $dates = [
        'fecha_pago',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'monto',
        'fecha_pago',
        'created_at',
        'updated_at',
        'deleted_at',
        'usuario_cobra_id',
        'beneficiario_pago_id',
    ];

    public function usuario_cobra()
    {
        return $this->belongsTo(User::class, 'usuario_cobra_id');
    }

    public function beneficiario_pago()
    {
        return $this->belongsTo(Beneficiario::class, 'beneficiario_pago_id');
    }

    public function getFechaPagoAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFechaPagoAttribute($value)
    {
        $this->attributes['fecha_pago'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
