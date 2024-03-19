<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioTipoIncidencia extends Model
{
    use HasFactory;

    protected $table = 'tbl_usuarios_tipos_incidencias';

    protected $fillable = ['id_usuario','id_tipoIncidencia'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function tipoIncidencia()
    {
        return $this->belongsTo(TipoIncidencia::class, 'id_tipoIncidencia');
    }
}
