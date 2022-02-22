<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'tabla_comentarios';
    protected $fillable = ['id', 'usuario', 'producto', 'contenido', 'respuesta'];
    protected $primaryKey = 'id';
}
