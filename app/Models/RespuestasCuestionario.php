<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestasCuestionario extends Model
{
    use HasFactory;
    
    protected  $primaryKey = 'idRespuestas';
    
    protected $fillable = [
        'idRespuestas'
    ];
}
