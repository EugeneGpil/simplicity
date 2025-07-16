<?php

namespace App\Modules\Authentication\Controllers;

use App\Modules\Authentication\Actions\CreateUserAction;
use App\Modules\Authentication\Dto\RegisterUserDto;
use App\Modules\Authentication\Requests\RegisterRequest;
use App\Modules\Authentication\Resources\UserRegisteredResource;
use App\Ship\Parents\ParentController;
use Illuminate\Http\JsonResponse;

class RegisterController extends ParentController
{
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $requestDto = app(RegisterUserDto::class, [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'deviceName' => $request->device_name,
        ]);

        $dto = app(CreateUserAction::class)
            ->run($requestDto);

        return $this->transform($dto, UserRegisteredResource::class);
    }
}
