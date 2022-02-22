<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'Compra';

    protected $fillable = ['id', 'Id_producto', 'Id_pedido', 'Fecha'];
    public $timestamps = false;
}
