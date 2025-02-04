<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidades';

    protected $fillable = [
        'nome',
        'estado',
        'created_up',
        'updated_up',
        'deleted_up',
    ];

    protected $dates = ['created_up', 'updated_up', 'deleted_up'];

    public function medicos()
    {
        return $this->hasMany(Medico::class, 'cidade_id');
    }
}
