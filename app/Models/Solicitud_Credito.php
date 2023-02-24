<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Solicitud_Credito extends Model
{
    protected $table = 'solicitud_creditos';
    use HasFactory;
    protected $fillable = [
        'id_solicitud',
        'monto', 
        'user_id', 
        'estado', 
        'mensaje',
        'documentacion'
    ];

    public const ESTADO = [
        'Crédito en revisión',
        'Falta información que completar o es incorrecta',
        'Línea de crédito rechazada', 
    ];
    public function estado(){
        return self::ESTADO[$this->estado];
    }

}
