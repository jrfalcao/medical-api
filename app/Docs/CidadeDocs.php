<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Cidades",
 *     description="Endpoints relacionados às cidades e médicos"
 * )
 */
/**
 * @OA\Schema(
 *     schema="Cidade",
 *     @OA\Property(property="id", type="integer", description="ID da cidade", readOnly=true),
 *     @OA\Property(property="nome", type="string", description="Nome da cidade"),
 *     @OA\Property(property="estado", type="string", description="UF do estado"),
 *     @OA\Property(property="created_at", type="string", format="date-time", readOnly=true),
 *     @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true),
 *     @OA\Property(property="deleted_at", type="string", format="date-time", readOnly=true),
 * )
 */
class CidadeDocs
{
    /**
     * @OA\Get(
     *     path="/api/cidades",
     *     summary="Listar cidades",
     *     description="Retorna uma lista de cidades. Pode ser filtrado pelo nome da cidade.",
     *     operationId="listarCidades",
     *     tags={"Cidades"},
     *     @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="Nome da cidade para filtrar",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de cidades retornada com sucesso",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Cidade"))
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Não autorizado",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthorized")
     *         )
     *     ),
     *     security={{"bearerAuth": {}}}
     * )
     */
    public function listarCidades() {}

    /**
     * @OA\Get(
     *     path="/api/cidades/{id_cidade}/medicos",
     *     summary="Listar médicos por cidade",
     *     description="Retorna uma lista de médicos de uma determinada cidade. Pode ser filtrado pelo nome do médico.",
     *     operationId="listarMedicosPorCidade",
     *     tags={"Cidades"},
     *     @OA\Parameter(
     *         name="id_cidade",
     *         in="path",
     *         description="ID da cidade",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="Nome do médico para filtrar",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de médicos retornada com sucesso",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Medico"))
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cidade não encontrada",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Cidade não encontrada")
     *         )
     *     ),
     *     security={{"bearerAuth": {}}}
     * )
     */
    public function listarMedicosPorCidade() {}
}
