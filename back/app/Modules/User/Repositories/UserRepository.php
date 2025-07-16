<?php

namespace App\Modules\User\Repositories;

use App\Models\User;
use App\Ship\Parents\ParentRepository;

class UserRepository extends ParentRepository
{
    public function findByEmail(string $email): ?User
    {
        return User
            ::where('email', $email)
            ->first();
    }
}
