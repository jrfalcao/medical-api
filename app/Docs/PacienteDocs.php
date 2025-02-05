<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Pacientes",
 *     description="Endpoints relacionados aos pacientes"
 * )
 */
/**
 * @OA\Schema(
 *     schema="Paciente",
 *     @OA\Property(property="id", type="integer", description="ID do paciente", readOnly=true),
 *     @OA\Property(property="nome", type="string", description="Nome do paciente"),
 *     @OA\Property(property="celular", type="string", description="Celular do paciente"),
 *     @OA\Property(property="cpf", type="string", description="CPF do paciente"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Data de criação", readOnly=true),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Data de atualização", readOnly=true),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", description="Data de exclusão", readOnly=true)
 * )
 */
class PacienteDocs
{

    /**
     * @OA\Post(
     *     path="/api/pacientes",
     *     summary="Adiciona um novo paciente",
     *     description="Cria um novo paciente no sistema. Apenas usuários autenticados podem acessar.",
     *     operationId="adicionarPaciente",
     *     tags={"Pacientes"},
     *     security={{"bearerAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nome", "celular", "cpf"},
     *             @OA\Property(property="nome", type="string", example="João da Silva"),
     *             @OA\Property(property="celular", type="string", example="5521971283586"),
     *             @OA\Property(property="cpf", type="string", example="12345678901")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Paciente criado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Paciente")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Dados inválidos",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Erro nos dados enviados")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthorized")
     *         )
     *     )
     * )
     */
    public function adicionar(){}

    /**
     * @OA\Post(
     *     path="/api/pacientes/{id_paciente}",
     *     summary="Atualiza os dados de um paciente",
     *     description="Este endpoint permite a atualização do nome e celular de um paciente existente. Apenas usuários autenticados podem acessar.",
     *     operationId="atualizarPaciente",
     *     tags={"Pacientes"},
     *     security={{"bearerAuth": {}}},
     *     @OA\Parameter(
     *         name="id_paciente",
     *         in="path",
     *         description="ID do paciente a ser atualizado",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nome", "celular"},
     *             @OA\Property(property="nome", type="string", example="João Silva"),
     *             @OA\Property(property="celular", type="string", example="5521998765432")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Paciente atualizado com sucesso",
     *         @OA\JsonContent(ref="#/components/schemas/Paciente")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Paciente não encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Paciente não encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthorized")
     *         )
     *     )
     * )
     */
    public function atualizar(){}
}
