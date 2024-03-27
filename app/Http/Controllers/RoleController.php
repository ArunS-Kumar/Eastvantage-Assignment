<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    public function __construct(protected RoleService $roleService)
    {
    }
    
    public function index(): JsonResponse
    {
        $roles = $this->roleService->getAllRoles();
        
        return response()->json($roles);
    }
}
