<?php

namespace App\Modules\Authentication\Resources;

use App\Modules\Authentication\Dto\CreatedUserDto;
use App\Ship\Parents\ParentResource;

/**
 * @property CreatedUserDto $resource
 */
class UserRegisteredResource extends ParentResource
{
    public function toArray($request): array
    {
        return [
            'user' => [
                'name' => $this->resource->user->name,
                'email' => $this->resource->user->email,
            ],
            'token' => [
                'token' => $this->resource->token->plainTextToken,
            ],
        ];
    }
}
