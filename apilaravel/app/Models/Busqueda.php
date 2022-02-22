<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    use HasFactory;

   protected $table = 'tabla_busqueda';
    protected $fillable = ['id_busqueda', 'busqueda', 'user_id', 'id_producto'];
    protected $primaryKey = 'user_id'; 
}
