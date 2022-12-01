<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    use HasFactory;
    protected $fillable = [
        'prestamo','tiempo','nombre','trabajo','ingreso','nomina','credito'
    ];
}
