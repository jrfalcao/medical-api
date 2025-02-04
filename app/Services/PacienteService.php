<?php

namespace App\Services;

use App\Models\Paciente;

class PacienteService
{
    public function atualizarPaciente($id_paciente, $data)
    {
        $paciente = Paciente::find($id_paciente);

        if (!$paciente) {
            return null;
        }

        $paciente->update($data);

        return $paciente;
    }

    public function adicionarPaciente(array $dados): Paciente
    {
        return Paciente::create([
            'nome' => $dados['nome'],
            'celular' => $dados['celular'],
            'cpf' => $dados['cpf'],
        ]);
    }
}
