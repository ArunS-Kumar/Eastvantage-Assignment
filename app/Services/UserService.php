<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function createUser(array $data): User
    {
        return $this->userRepository->create($data);
    }

    public function getUsersByRole(int $role): Collection
    {
        return $this->userRepository->getUsersByRole($role);
    }
}
