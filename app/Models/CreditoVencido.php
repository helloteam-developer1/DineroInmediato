<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditoVencido extends Model
{
    use HasFactory;
    protected $table = 'credito_vencido';
    protected $fillable = [
        'id',
        'num_cliente',
        'num_credito',
        'telefono',
        'nombre',
        'email',
    ];
}
