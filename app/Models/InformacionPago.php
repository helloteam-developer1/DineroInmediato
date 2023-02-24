<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionPago extends Model
{
    use HasFactory;
    protected $table = "informacion_de_pago";
    protected $fillable = [
        'id_forma_de_pago',
        'titular',
        'num_cuenta',
        'banco',
        'clave_inter',
        'num_tarjeta',
        'fecha_mm',
        'fecha_yy',
        'user_id'
    ];
}
