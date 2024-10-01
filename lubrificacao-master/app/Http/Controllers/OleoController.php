<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oleo extends Model
{
    use HasFactory;

    protected $fillable = [
        'maquina_id',
        'sistema_lubrificacao',
        'sistema_refrigeracao',
        'sistema_pneumatico',
    ];
}