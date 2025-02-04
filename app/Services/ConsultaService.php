<?php

namespace App\Services;

use App\Models\Consulta;

class ConsultaService
{
    /**
     * Listar todas os médicos.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listarMedicos($nome = null)
    {
        $query = Consulta::orderBy('nome');

        if ($nome) {
            $query->whereRaw("REPLACE(REPLACE(nome, 'Dr. ', ''), 'Dra. ', '') LIKE ?", ["%$nome%"]);
        }

        return $query->get();
    }

    public function listar($data = null, $medico_id = null)
    {
        $query = Consulta::orderBy('data', 'desc');

        if ($data) {
            $query->whereDate('data', '=', $data);
        }

        if ($medico_id) {
            $query->where('medico_id', '=', $medico_id);
        }

        return $query->get();
    }

    public function createConsulta(array $data): Consulta
    {
        return Consulta::create($data);
    }
}
