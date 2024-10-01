<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaquinaOleo extends Model
{
    use HasFactory;

    protected $table = 'maquinas_oleos';
    protected $fillable = ['maquina_id', 'oleo_id'];
}