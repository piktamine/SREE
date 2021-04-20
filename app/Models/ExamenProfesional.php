<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenProfesional extends Model
{
    use HasFactory;
    
    protected  $primaryKey = 'idExamen';
    
    protected $fillable = [
        'idExamen',
        'claveAlumno'
    ];
}
