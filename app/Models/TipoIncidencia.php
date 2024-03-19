<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIncidencia extends Model
{
    use HasFactory;

    protected $table = 'tbl_usuarios_tipos_incidencias';

    protected $fillable = ['tipo_tipoinci','descripcion_tipoinci'];
}