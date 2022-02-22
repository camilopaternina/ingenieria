<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'Producto';

    protected $fillable = ['Id_producto', 'Id_proveedor', 'Nombrep', 'Descripcion', 'PrecioVenta', 'PrecioCompra', 'Cantidad', 'Id_categoria'];
    protected $primaryKey = 'Id_producto';
    public $timestamps = false;
}
