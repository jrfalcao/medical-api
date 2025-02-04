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
    public function listarMedicos($nome = null)
    {
        $query = Medico::orderBy('nome');

        if ($nome) {
            $query->whereRaw("REPLACE(REPLACE(nome, 'Dr. ', ''), 'Dra. ', '') LIKE ?", ["%$nome%"]);
        }

        return $query->get();
    }

    public function createMedico(array $data): Medico
    {
        return Medico::create($data);
    }
}
