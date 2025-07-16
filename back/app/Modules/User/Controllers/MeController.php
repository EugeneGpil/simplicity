<?php

namespace App\Modules\User\Controllers;

use App\Modules\User\Resources\UserResource;
use App\Ship\Parents\ParentController;
use Illuminate\Http\JsonResponse;

class MeController extends ParentController
{
    public function __invoke(): JsonResponse
    {
        $user = auth()->user();

        return $this->transform($user, UserResource::class);
    }
}
