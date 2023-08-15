<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensalamento extends Model
{
    use HasFactory;

    public function UC()
    {
        return $this->belongsTo(UC::class, 'idUC', 'idUC');
    }

    public function SalaDeAula()
    {
        return $this->belongsTo(SalaDeAula::class, 'idSala', 'idSala');
    }

    protected $fillable = [
        'idEnsalamento',
        'idUC',
        'idSala',
    ];
}
