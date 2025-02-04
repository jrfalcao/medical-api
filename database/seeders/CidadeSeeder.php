<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cidade::insert([
            ['nome' => 'São Paulo'],
            ['nome' => 'Rio de Janeiro'],
            ['nome' => 'Belo Horizonte'],
        ]);
    }
}
