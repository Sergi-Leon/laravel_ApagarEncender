<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $table = 'tbl_incidencias';

    protected $fillable = ['categoria_inci','subcategoria_inci','descripcion_inci','fecha_create_inci','fecha_resuelta_inci','estado_inci','prioridad_inci','comentario_inci','id_cliente','id_tecnico'];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'id_cliente');
    }

    public function tecnico()
    {
        return $this->belongsTo(User::class, 'id_tecnico');
    }
}
