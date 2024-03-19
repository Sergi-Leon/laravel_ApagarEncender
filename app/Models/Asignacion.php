<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $table = 'tbl_asignaciones';

    protected $fillable = ['id_gestor','id_tecnico','id_incidencia',];
}