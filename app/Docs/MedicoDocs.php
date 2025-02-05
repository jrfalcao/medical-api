<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Médicos",
 *     description="Endpoints relacionados aos médicos"
 * )
 */
/**
 * @OA\Schema(
 *     schema="Medico",
 *     @OA\Property(property="id", type="integer", readOnly=true),
 *     @OA\Property(property="nome", type="string"),
 *     @OA\Property(property="especialidade", type="string"),
 *     @OA\Property(property="cidade_id", type="integer"),
 *     @OA\Property(property="created_at", type="string", format="date-time", readOnly=true),
 *     @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", readOnly=true)
 * )
 */
class MedicoDocs
{

    /**
     * @OA\Get(
     *     path="/api/medicos",
     *     summary="Listar médicos",
     *     description="Retorna uma lista de médicos cadastrados no sistema, podendo ser filtrado por nome.",
     *     operationId="listarMedicos",
     *     tags={"Médicos"},
     *     @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="Filtrar médicos pelo nome",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de médicos retornada com sucesso",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Medico"))
     *     )
     * )
     */
    public function listarMedicos() {}

    /**
     * @OA\Post(
     *     path="/api/medicos",
     *     summary="Cadastrar médico",
     *     description="Cria um novo médico no sistema. Apenas usuários autenticados podem utilizar este recurso.",
     *     operationId="criarMedico",
     *     tags={"Médicos"},
     *     security={{"bearerAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nome", "crm", "especialidade"},
     *             @OA\Property(property="nome", type="string", description="Nome completo do médico", example="João da Silva"),
     *             @OA\Property(property="crm", type="string", description="Número do CRM do médico", example="123456"),
     *             @OA\Property(property="especialidade", type="string", description="Especialidade do médico", example="Cardiologia")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Médico cadastrado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Medico")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Dados inválidos",
     *         @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Dados inválidos")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autorizado",
     *         @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Não autorizado")
     *         )
     *     )
     * )
     */
    public function criarMedico() {}

    /**
 * @OA\Get(
 *     path="/api/medicos/{id_medico}/pacientes",
 *     summary="Listar pacientes de um médico",
 *     description="Retorna todos os pacientes que possuem consultas agendadas e/ou realizadas com o médico especificado.
     *      Os seguintes parâmetros podem ser enviados via query string para filtrar os resultados:
     *      - `nome`: Filtra pacientes pelo nome (parcial ou completo).
     *      - `apenas-agendadas`: Se `true`, retorna apenas consultas ainda não realizadas.
     *      Exemplos:
     *      - `/api/medicos/123/pacientes`
     *      - `/api/medicos/123/pacientes?nome=joao`
     *      - `/api/medicos/123/pacientes?nome=joao&apenas-agendadas=true"
     *     ,
     *     operationId="listarPacientesDoMedico",
     *     tags={"Médicos"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Parameter(
     *         name="id_medico",
     *         in="path",
     *         description="ID do médico",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="Filtrar pacientes pelo nome (parcial ou completo)",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="apenas-agendadas",
     *         in="query",
     *         description="Se true, retorna apenas consultas ainda não realizadas",
     *         required=false,
     *         @OA\Schema(type="boolean")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pacientes retornada com sucesso",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Paciente"))
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autorizado",
     *         @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Não autorizado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Médico não encontrado",
     *         @OA\JsonContent(
     *              @OA\Property(property="message", type="string", example="Médico não encontrado")
     *         )
     *     )
     * )
    */
public function listarPacientes() {}
}
