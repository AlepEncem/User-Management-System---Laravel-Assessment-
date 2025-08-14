<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/users",
 *     tags={"Users"},
 *     summary="Get list of users",
 *     description="Returns list of users with pagination",
 *     @OA\Parameter(
 *         name="page",
 *         in="query",
 *         description="Page number",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Parameter(
 *         name="status",
 *         in="query",
 *         description="Filter by status",
 *         required=false,
 *         @OA\Schema(type="string", enum={"active", "inactive"})
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/User"))
 *         )
 *     )
 * )
 * 
 * @OA\Post(
 *     path="/users",
 *     tags={"Users"},
 *     summary="Create a new user",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name","email","phone_number","password","status"},
 *             @OA\Property(property="name", type="string", example="John Doe"),
 *             @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *             @OA\Property(property="phone_number", type="string", example="+1234567890"),
 *             @OA\Property(property="password", type="string", format="password", example="password123"),
 *             @OA\Property(property="status", type="string", enum={"active", "inactive"})
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="User created successfully",
 *         @OA\JsonContent(ref="#/components/schemas/User")
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error"
 *     )
 * )
 * 
 * @OA\Get(
 *     path="/users/{id}",
 *     tags={"Users"},
 *     summary="Get user by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="User ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/User")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="User not found"
 *     )
 * )
 * 
 * @OA\Put(
 *     path="/users/{id}",
 *     tags={"Users"},
 *     summary="Update user",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="User ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="email", type="string", format="email"),
 *             @OA\Property(property="phone_number", type="string"),
 *             @OA\Property(property="status", type="string", enum={"active", "inactive"})
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="User updated successfully",
 *         @OA\JsonContent(ref="#/components/schemas/User")
 *     )
 * )
 * 
 * @OA\Delete(
 *     path="/users/{id}",
 *     tags={"Users"},
 *     summary="Delete user",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="User ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="User deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User deleted successfully")
 *         )
 *     )
 * )
 * 
 * @OA\Delete(
 *     path="/users/bulk/delete",
 *     tags={"Users"},
 *     summary="Bulk delete users",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"user_ids"},
 *             @OA\Property(
 *                 property="user_ids",
 *                 type="array",
 *                 @OA\Items(type="integer"),
 *                 example={1,2,3}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Users deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="3 users deleted successfully")
 *         )
 *     )
 * )
 */
class SwaggerController extends Controller
{
    // This is just for Swagger documentation
    // The actual implementation is in UserController
}