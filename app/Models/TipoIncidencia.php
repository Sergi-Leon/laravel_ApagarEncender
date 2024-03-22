<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIncidencia extends Model
{
    use HasFactory;

    protected $table = 'tbl_tipos_incidencias';

    protected $fillable = ['nombre_tipo_tipoinci','descripcion_tipoinci'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'tbl_usuarios_tipos_incidencias', 'id_tipoIncidencia', 'id_usuario');
    }

    public function subIncidencias()
    {
        return $this->hasMany(TipoSubIncidencia::class, 'tipo_incidencia_id');
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class, 'tipo_incidencia_id');
    }
}
