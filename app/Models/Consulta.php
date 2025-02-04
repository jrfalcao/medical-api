<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'consultas';

    protected $fillable = [
        'medico_id',
        'paciente_id',
        'data',
    ];

    protected $dates = ['data', 'created_at', 'updated_at', 'deleted_at'];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
