<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'tbl_chat';

    protected $fillable = ['mensaje_chat', 'remitente_id', 'destinatario_id', 'incidencia_id'];

    public function remitente()
    {
        return $this->belongsTo(User::class, 'remitente_id');
    }

    public function destinatario()
    {
        return $this->belongsTo(User::class, 'destinatario_id');
    }

    public function incidencia()
    {
        return $this->belongsTo(Incidencia::class);
    }
}
