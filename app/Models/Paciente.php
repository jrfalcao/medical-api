<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'cpf',
        'celular',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'paciente_id');
    }
}
