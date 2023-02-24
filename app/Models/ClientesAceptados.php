<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesAceptados extends Model
{
    use HasFactory;
    protected $table = 'clientes_aceptados';
    protected $fillable = [
       'id_cliente_aceptado',
       'user_id',
       'credito_num',
       'nombre'
    ];
}
