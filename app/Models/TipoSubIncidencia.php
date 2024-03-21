<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSubIncidencia extends Model
{
    use HasFactory;

    protected $table = 'tbl_tipos_subincidencias';

    protected $fillable = ['nombre_tipo_tiposubinci', 'tipo_incidencia_id', 'descripcion_tiposubinci'];

    public function tipoIncidencia()
    {
        return $this->belongsTo(TipoIncidencia::class);
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class, 'tipo_subincidencia_id');
    }
}
