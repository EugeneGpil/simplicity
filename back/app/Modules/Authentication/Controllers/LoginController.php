<?php

namespace App\Modules\Authentication\Controllers;

use App\Modules\Authentication\Actions\LoginAction;
use App\Modules\Authentication\Dto\LoginDto;
use App\Modules\Authentication\Requests\LoginRequest;
use App\Modules\Authentication\Resources\UserRegisteredResource;
use App\Ship\Parents\ParentController;
use Illuminate\Http\JsonResponse;

class LoginController extends ParentController
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $loginDto = app(LoginDto::class, [
            'email' => $request->email,
            'password' => $request->password,
            'deviceName' => $request->device_name,
        ]);

        $resultDto = app(LoginAction::class)
            ->run($loginDto);

        return $this->transform($resultDto, UserRegisteredResource::class);
    }
}
