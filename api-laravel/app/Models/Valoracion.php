<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = 'Valoracion';

    protected $fillable = ['Id_valoracion', 'id', 'Id_producto', 'Calificacion', 'Comentario'];
    protected $primaryKey = 'Id_producto';
    public $timestamps = false;
}
