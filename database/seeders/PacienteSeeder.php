<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paciente::insert([
            ['nome' => 'Carlos Almeida', 'telefone' => '11999999999'],
            ['nome' => 'Ana Pereira', 'telefone' => '21988888888'],
        ]);
    }
}
