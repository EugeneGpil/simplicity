<?php

namespace App\Modules\User\Resources;

use App\Models\User;
use App\Ship\Parents\ParentResource;

/**
 * @property User $resource
 */
class UserResource extends ParentResource
{
    public function toArray($request): array
    {
        return [
            'name' => $this->resource->name,
            'email' => $this->resource->email,
        ];
    }
}
