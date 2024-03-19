<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'tbl_chat';

    protected $fillable = ['mensaje_chat','id_usuario'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
