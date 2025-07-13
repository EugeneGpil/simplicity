<?php

namespace App\Modules\Authentication\Repositories;

use App\Models\User;
use App\Modules\Authentication\Dto\CreateUserDto;
use App\Ship\Parents\ParentRepository;

class UserRepository extends ParentRepository
{
    public function create(CreateUserDto $dto): User
    {
        return User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }
}
