<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditoFinalizado extends Model
{
    use HasFactory;
    protected $table = 'clientes_finalizados';
    protected $fillable = [
        'user_id',
        'nombre',
        'num_creditos_fin',
        'credito_actual',
    ];
    //1 Vigente
    //0 Inactivo
}
