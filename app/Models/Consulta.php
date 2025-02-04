<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $table = 'consultas';

    protected $fillable = [
        'medico_id',
        'paciente_id',
        'data',
        'created_up',
        'updated_up',
        'deleted_up',
    ];

    protected $dates = ['data', 'created_up', 'updated_up', 'deleted_up'];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
