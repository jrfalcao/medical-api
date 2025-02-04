<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListarPacientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'apenas-agendadas' => 'nullable|in:0,1,true,false',
            'nome' => 'nullable|string|min:3'
        ];
    }
}
