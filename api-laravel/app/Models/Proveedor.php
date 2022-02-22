<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'Proveedor';

    protected $fillable = ['Id_proveedor', 'Nombrepro', 'Correo', 'Telefono'];
    protected $primaryKey = 'Id_proveedor';
    public $timestamps = false;
}
