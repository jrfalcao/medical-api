<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'cpf',
        'celular',
        'created_up',
        'updated_up',
        'deleted_up',
    ];

    protected $dates = ['created_up', 'updated_up', 'deleted_up'];

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'paciente_id');
    }
}
