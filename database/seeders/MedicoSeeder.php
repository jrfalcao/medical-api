<?php

namespace Database\Seeders;

use App\Models\Medico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medico::insert([
            ['nome' => 'Dr. João Silva', 'especialidade' => 'Cardiologista', 'cidade_id' => 1],
            ['nome' => 'Dra. Maria Souza', 'especialidade' => 'Pediatra', 'cidade_id' => 2],
        ]);
    }
}
