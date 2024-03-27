<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }
    
    public function store(CreateUserRequest $request): JsonResponse
    {
        try {
            $user = $this->userService->createUser($request->validated());

            return response()->json($user, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getUsersByRole(int $role): JsonResponse
    {
        try {
            $users = $this->userService->getUsersByRole($role);

            return response()->json($users);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
