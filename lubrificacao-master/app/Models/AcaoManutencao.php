<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaoManutencao extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    // Relacionamento com registros de manutenção (muitos-para-muitos)
    public function registros()
    {
        return $this->belongsToMany(Registro::class, 'registro_acoes');
    }
}