<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CliMedi extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','laboratorio','presentacion','precio_unidad','Existencia','imagen'];
}
