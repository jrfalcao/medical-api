<?php

namespace App\Services;

use App\Models\Medico;

class MedicoService
{
    /**
     * Listar todas os médicos.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listarMedicos()
    {
        return Medico::all();
    }
}
