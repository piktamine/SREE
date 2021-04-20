<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroSinodal extends Model
{
    use HasFactory;
    
    public $table = 'registro_sinodals';
    protected  $primaryKey = 'id';
    
    protected $fillable = [
        'tipoSinodal',
        'rpe',
        'idExamen'
    ];
}
