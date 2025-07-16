<?php

namespace App\Modules\Authentication\Actions;

use App\Modules\Authentication\Dto\LoginDto;
use App\Modules\Authentication\Dto\UserWithTokenDto;
use App\Modules\Authentication\Ship\Repositories\UserRepository;
use App\Ship\Parents\ParentAction;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Hash;

class LoginAction extends ParentAction
{
    public function run(LoginDto $dto): UserWithTokenDto
    {
        $user = app(UserRepository::class)
            ->findByEmail($dto->email);

        if (
            $user === null
            || Hash::check($dto->password, $user->password) === false
        ) {
            throw new AuthenticationException(trans('auth.failed'));
        }

        $token = $user->createToken($dto->deviceName);

        return app(UserWithTokenDto::class, [
            'user' => $user,
            'token' => $token
        ]);
    }
}
