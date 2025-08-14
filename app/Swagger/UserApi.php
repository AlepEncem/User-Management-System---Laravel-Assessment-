<?php

namespace App\Swagger;

/**
 * @OA\Get(
 *     path="/api/users",
 *     tags={"Users"},
 *     summary="Get all users",
 *     @OA\Response(response="200", description="List of users")
 * )
 * 
 * @OA\Post(
 *     path="/api/users",
 *     tags={"Users"},
 *     summary="Create user",
 *     @OA\Response(response="201", description="User created")
 * )
 * 
 * @OA\Get(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Get user by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="200", description="User details")
 * )
 * 
 * @OA\Put(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Update user",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="200", description="User updated")
 * )
 * 
 * @OA\Delete(
 *     path="/api/users/{id}",
 *     tags={"Users"},
 *     summary="Delete user",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="200", description="User deleted")
 * )
 */
class UserApi
{
    // This class is only for Swagger documentation
}