<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fomrcao_proff extends Model
{
    use HasFactory;

    protected $fillable = [
        'professors_id',
        'Formacao',
        'Local_formacao',
    ];
}
