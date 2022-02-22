<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carritoProducto extends Model
{
    use HasFactory;

    protected $table = 'tabla_carrito-producto';
    protected $fillable = ['carrito', 'producto', 'cantidad', 'precio'];
    protected $primaryKey = 'carrito';
}
