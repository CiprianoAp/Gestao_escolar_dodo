<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'alunos_id' ,
        'ano_letivos_id',
        'cursos_id',
        'turmas_id',
    ];
}
