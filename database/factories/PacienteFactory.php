<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'cpf' => $this->faker->numerify('###.###.###-##'), // CPF formatado
            'celular' => $this->faker->phoneNumber,
            'created_up' => now(),
            'updated_up' => now(),
            'deleted_up' => null,
        ];
    }
}
