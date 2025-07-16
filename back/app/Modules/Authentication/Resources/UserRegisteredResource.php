<?php

namespace App\Modules\Authentication\Resources;

use App\Modules\Authentication\Dto\UserWithTokenDto;
use App\Modules\Authentication\Ship\Resources\UserResource;
use App\Ship\Parents\ParentResource;

/**
 * @property UserWithTokenDto $resource
 */
class UserRegisteredResource extends ParentResource
{
    public function toArray($request): array
    {
        return [
            'user' => app(UserResource::class, [
                'resource' => $this->resource->user,
            ]),
            'token' => [
                'token' => $this->resource->token->plainTextToken,
            ],
        ];
    }
}
