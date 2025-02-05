<?php

namespace App\Docs;

use OpenApi\Annotations as OA;

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         title="MedicalAPI",
 *         version="1.0",
 *         description="Documentação da API do MedicalAPI"
 *     ),
 *     @OA\Server(
 *         url="http://localhost/api",
 *         description="Ambiente de desenvolvimento"
 *     ), *
 *     @OA\Components(
 *         @OA\SecurityScheme(
 *             securityScheme="bearerAuth",
 *             type="http",
 *             scheme="bearer",
 *             bearerFormat="JWT"
 *         )
 *     )
 * )
 */
class OpenApiDocumentation {}

