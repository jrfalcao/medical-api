<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* AuthController */
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->get('user', [AuthController::class, 'me']);
Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);

/* CidadeController */
Route::get('cidades', [CidadeController::class, 'index']);
Route::get('/cidades/{id_cidade}/medicos', [CidadeController::class, 'listarMedicos']);

/* MedicoController */
Route::get('medicos', [MedicoController::class, 'index']);
Route::middleware('auth:api')->post('medicos', [MedicoController::class, 'store']);
Route::middleware('auth:api')->get('/medicos/{id_medico}/pacientes', [MedicoController::class, 'listarPacientes']);

/* ConsultaController */
Route::middleware('auth:api')->post('/medicos/consulta', [ConsultaController::class, 'store']);
Route::middleware('auth:api')->get('/medicos/consultas', [ConsultaController::class, 'listar']);

/* PacientesController */
Route::middleware('auth:api')->post('/pacientes/{id_paciente}', [PacienteController::class, 'atualizar']);
