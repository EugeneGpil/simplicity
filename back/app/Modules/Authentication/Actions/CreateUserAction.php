<?php

namespace App\Modules\Authentication\Actions;

use App\Modules\Authentication\Dto\UserWithTokenDto;
use App\Modules\Authentication\Dto\CreateUserDto;
use App\Modules\Authentication\Dto\RegisterUserDto;
use App\Modules\Authentication\Repositories\UserRepository;
use App\Ship\Parents\ParentAction;

class CreateUserAction extends ParentAction
{
    public function run(RegisterUserDto $dto): UserWithTokenDto
    {
        $createDto = app(CreateUserDto::class, [
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);

        $user = app(UserRepository::class)->create($createDto);

        $token = $user->createToken($dto->deviceName);

        return app(UserWithTokenDto::class, [
            'user' => $user,
            'token' => $token
        ]);
    }
}
