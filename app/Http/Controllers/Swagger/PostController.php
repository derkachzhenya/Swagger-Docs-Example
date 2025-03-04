<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 * 
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="title",
 *                 type="string",
 *                 example="Some body"
 *             ),
 *              @OA\Property(
 *                 property="like",
 *                 type="integer",
 *                 example=20
 *             ),
 *         )
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                 property="data",
 *                 type="object",  
 *                  @OA\Property(
 *                      property="id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *                  @OA\Property(
 *                      property="title",
 *                      type="string",
 *                      example="Some body"
 *                  ),
 *                  @OA\Property(
 *                      property="like",
 *                      type="integer",
 *                      example=20
 *                   ),
 *               ),
 *          )
 *     )
 * ),
 * 
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                 property="data",
 *                 type="array",
 *                 @OA\Items(
 *                     @OA\Property(
 *                          property="id",
 *                          type="integer",
 *                          example=1
 *                      ),
 *                      @OA\Property(
 *                          property="title",
 *                          type="string",
 *                          example="Some body"
 *                      ),
 *                      @OA\Property(
 *                          property="like",
 *                          type="integer",
 *                          example=20
 *                      ),
 *                  ),
 *              ),               
 *          )
 *     )
 * ),
 * 
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Единичная запись",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1,
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                 property="data",
 *                 type="object",  
 *                  @OA\Property(
 *                      property="id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *                  @OA\Property(
 *                      property="title",
 *                      type="string",
 *                      example="Some body"
 *                  ),
 *                  @OA\Property(
 *                      property="like",
 *                      type="integer",
 *                      example=20
 *                   ),
 *               ),
 *          )
 *     )
 * ),  
 * 
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=2,
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="title",
 *                 type="string",
 *                 example="Some body"
 *             ),
 *              @OA\Property(
 *                 property="like",
 *                 type="integer",
 *                 example=20
 *              ),
 *          )
 *      ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                 property="data",
 *                 type="object",  
 *                  @OA\Property(
 *                      property="id",
 *                      type="integer",
 *                      example=1
 *                  ),
 *                  @OA\Property(
 *                      property="title",
 *                      type="string",
 *                      example="Some body"
 *                  ),
 *                  @OA\Property(
 *                      property="like",
 *                      type="integer",
 *                      example=20
 *                   ),
 *               ),
 *          )
 *     )
 * ),  
 * 
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1,
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *              @OA\Property(
 *                 property="message",
 *                 type="string", 
 *                 example="done" 
 *               ),
 *          )
 *     )
 * ), 
 */
class PostController extends Controller
{

}
