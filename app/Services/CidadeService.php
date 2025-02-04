<?php

namespace App\Services;

use App\Models\Cidade;

class CidadeService
{
    /**
     * Listar todas as cidades.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listarCidades($nome = null)
    {
        $query = Cidade::orderBy('nome');

        if ($nome) {
            $query->where('nome', 'LIKE', "%$nome%");
        }

        return $query->get();
    }

    public function listarMedicosPorCidade($cidadeId, $nome = null)
    {
        $query = Cidade::findOrFail($cidadeId)->medicos()->orderBy('nome');

        if ($nome) {
            $query->whereRaw("REPLACE(REPLACE(nome, 'Dr. ', ''), 'Dra. ', '') LIKE ?", ["%$nome%"]);
        }

        return $query->get();
    }
}
