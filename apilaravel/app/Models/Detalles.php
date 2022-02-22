<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    use HasFactory;

    protected $table = 'tabla_detalles';
    protected $fillable = ['id_detalle', 'factura', 'producto', 'cantidad', 'precio'];
    protected $primaryKey = 'factura';
}
