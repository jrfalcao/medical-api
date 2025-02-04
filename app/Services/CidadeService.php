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
    public function listarCidades()
    {
        return Cidade::all();
    }
}
