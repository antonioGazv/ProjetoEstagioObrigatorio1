<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaDeAula extends Model
{

    public function ensalamentos()
    {
        return $this->hasMany(Ensalamento::class, 'idSala', 'idSala');
    }
    protected $fillable = [
        'NomeSala',
        'idSala',
        'Capacidade',
        'Categoria',
        'Disponivel',
    ];
}
