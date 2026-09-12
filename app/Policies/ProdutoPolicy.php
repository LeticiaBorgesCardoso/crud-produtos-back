<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Produto;
use App\Models\User;

class ProdutoPolicy
{
    public function view(): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === UserRole::ADMIN;
    }

    public function update(User $user, Produto $produto): bool
    {
        return $user->role === UserRole::ADMIN && $user->id === $produto->user_id;
    }

    public function delete(User $user, Produto $produto): bool
    {
        return $user->role === UserRole::ADMIN && $user->id === $produto->user_id;
    }
}
