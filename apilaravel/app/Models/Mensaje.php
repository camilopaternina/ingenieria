<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'tabla_mensaje';
    protected $fillable = ['id_mensaje', 'contenido', 'leido', 'emisor', 'receptor'];
    protected $primaryKey = 'receptor'; 
}
