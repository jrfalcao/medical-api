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

    public function listar($data = null, $medicoId = null)
    {
        $query = Consulta::orderBy('data', 'desc');

        if ($data) {
            $query->whereDate('data', '=', $data);
        }

        if ($medicoId) {
            $query->where('medico_id', '=', $medicoId);
        }

        return $query->get();
    }

    public function createConsulta(array $data): Consulta
    {
        return Consulta::create($data);
    }

    public function listarPacientesDoMedico($medicoId, $filtro)
    {
        $query = Consulta::where('medico_id', $medicoId)
            ->with('paciente')
            ->orderBy('data', 'asc');

        if (!empty($filtro['apenas-agendadas']) && $filtro['apenas-agendadas'] == true) {
            $query->where('realizada', false);
        }

        if (!empty($filtro['nome'])) {
            $query->whereHas('paciente', function ($q) use ($filtro) {
                $q->where('nome', 'like', '%' . $filtro['nome'] . '%');
            });
        }

        return $query->get()->map(function ($consulta) {
            return $consulta->paciente;
        })->unique('id')->values();
    }
}
