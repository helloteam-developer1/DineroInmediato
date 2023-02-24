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
        'telefono',
        'email',
        'num_credito'
    ];
}
