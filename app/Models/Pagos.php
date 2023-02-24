<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'pagos_credito';
    use HasFactory;
    protected $fillable = [
        'id_pago',
        'num_credito',
        'numero_pagos',
        'fecha_pago',
        'monto_pago',
        'saldo_insoluto',
        'pago_rest',
        'resta_pagar'
    ];
}
