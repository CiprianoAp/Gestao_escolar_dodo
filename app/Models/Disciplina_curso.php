<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina_curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'disciplinas_id',
        'cursos_id',
    ];
}
