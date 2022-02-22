<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'tabla_categoria';
    protected $fillable = ['id_categoria', 'nombre_categoria', 'referida'];
    protected $primaryKey = 'id_categoria';
}
