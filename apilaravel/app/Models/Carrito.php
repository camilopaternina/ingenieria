<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'tabla_carrito';
    protected $fillable = ['id_carrito', 'user'];
    protected $primaryKey = 'user';
}
