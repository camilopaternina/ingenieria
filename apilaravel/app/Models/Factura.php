<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table       = 'tabla_factura';
    protected $fillable    = ['id_facturas','comprado', 'pago'];
    protected $primaryKey  = 'id_facturas'; 
}
