<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Consultas",
 *     description="Endpoints relacionados às consultas médicas"
 * )
 */
/**
 * @OA\Schema(
 *     schema="Consulta",
 *     @OA\Property(property="id", type="integer", description="ID da consulta", readOnly=true),
 *     @OA\Property(property="medico_id", type="integer", description="ID do médico"),
 *     @OA\Property(property="paciente_id", type="integer", description="ID do paciente"),
 *     @OA\Property(property="data", type="string", format="date-time", description="Data da consulta (Y-m-d H:i:s)"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Data de criação", readOnly=true),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Data de atualização", readOnly=true),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", description="Data de exclusão", readOnly=true)
 * )
 */
class ConsultaDocs
{
    /**
     * @OA\Get(
     *     path="/api/medicos/consultas",
     *     summary="Listar consultas",
     *     description="Retorna uma lista de consultas, podendo ser filtrada por data e pelo ID do médico.",
     *     operationId="listarConsultas",
     *     tags={"Consultas"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Parameter(
     *         name="data",
     *         in="query",
     *         description="Filtrar consultas por data (formato Y-m-d)",
     *         required=false,
     *         @OA\Schema(type="string", format="date")
     *     ),
     *     @OA\Parameter(
     *         name="medico_id",
     *         in="query",
     *         description="Filtrar consultas pelo ID do médico",
     *         required=false,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de consultas retornada com sucesso",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Consulta"))
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autorizado"
     *     )
     * )
     */
    public function listar() {}

    /**
     * @OA\Post(
     *     path="/api/medicos/consulta",
     *     summary="Agendar consulta",
     *     description="Cria um novo agendamento de consulta médica. Apenas usuários autenticados podem utilizar este recurso.",
     *     operationId="criarConsulta",
     *     tags={"Consultas"},
     *     security={{"bearerAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"medico_id", "paciente_id", "data"},
     *             @OA\Property(property="medico_id", type="integer", description="ID do médico"),
     *             @OA\Property(property="paciente_id", type="integer", description="ID do paciente"),
     *             @OA\Property(property="data", type="string", format="date-time", description="Data da consulta (Y-m-d H:i:s)")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Consulta agendada com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Consulta")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Dados inválidos"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autorizado"
     *     )
     * )
     */
    public function agendar() {}
}
