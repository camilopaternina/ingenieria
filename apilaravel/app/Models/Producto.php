<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tabla_producto';
    protected $fillable = ['id_producto', 'nombre_producto', 'descripcion_producto', 'stock', 'vendidos', 'precio', 'visible', 'user_id', 'categoria'];
    protected $primaryKey = 'id_producto';
    public $timestamps = false;
}
