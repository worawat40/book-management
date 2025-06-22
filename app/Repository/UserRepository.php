<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    protected User $model;

    public function __construct(User $model) {}

    public function create(array $data): User
    {
        return $this->model->create($data);
    }

    public function findByEmail(string $email): ?User
    {
        return $this->model->where('email', $email)->first();
    }
}
