<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Resources\UserResource;
use App\Ship\Common\JsonResponse;
use App\Ship\Parents\ParentController;

class MeController extends ParentController
{
    public function __invoke(): JsonResponse
    {
        $user = auth()->user();

        return $this->transform($user, UserResource::class);
    }
}
