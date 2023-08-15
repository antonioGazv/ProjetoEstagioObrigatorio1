<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UC extends Model
{

    public function ensalamentos()
    {
        return $this->hasMany(Ensalamento::class, 'idUC', 'idUC');
    }
    protected $fillable = [
        'idUC',
        'TipoUC',
        'NomeUC',
        'CargaHoraria',
        'qtdAlunos',
    ];
}
