<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof_disciplina extends Model
{
    use HasFactory;

    protected $fillable = [
        'professors_id',
        'disciplinas_id'
    ];
}
