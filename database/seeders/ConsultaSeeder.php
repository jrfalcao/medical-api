<?php

namespace Database\Seeders;

use App\Models\Consulta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consulta::insert([
            ['medico_id' => 1, 'paciente_id' => 1, 'data' => now()],
            ['medico_id' => 2, 'paciente_id' => 2, 'data' => now()->addDays(2)],
        ]);
    }
}
