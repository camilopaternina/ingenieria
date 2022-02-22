<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'tabla_imagen';
    protected $fillable = ['id_imagen','id_producto'];
    protected $primaryKey = 'id_producto';
}
