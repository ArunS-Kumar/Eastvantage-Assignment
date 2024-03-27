<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function __construct(protected User $model)
    {
    }

    public function create(array $attributes): User
    {
        $user = $this->model->create($attributes);
        
        if (isset($attributes['role_id'])) {

            foreach ($attributes['role_id'] as $roleId) {
                $role = Role::find($roleId);

                if ($role) {
                    $user->roles()->attach($role);
                }
            }
        }

        return $user;
    }

    public function getUsersByRole(int $role): Collection
    {
        return $this->model->whereHas('roles', function ($query) use ($role) {
            $query->where('roles.id', $role);
        })->get();
    }
}
