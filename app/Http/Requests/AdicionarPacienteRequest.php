<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdicionarPacienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3',
            'celular' => 'required|string|min:11|max:20',
            'cpf' => 'required|string|unique:pacientes,cpf',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'celular.required' => 'O celular é obrigatório.',
            'celular.min' => 'O celular deve ter no mínimo 11 caracteres.',
            'celular.max' => 'O celular deve ter no máximo 20 caracteres.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.cpf' => 'O CPF deve ser válido.',
            'cpf.unique' => 'O CPF informado já está cadastrado.',
        ];
    }
}
