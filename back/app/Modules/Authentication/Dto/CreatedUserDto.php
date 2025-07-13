<?php

namespace App\Modules\Authentication\Dto;

use App\Models\User;
use App\Ship\Parents\ParentDto;
use Laravel\Sanctum\NewAccessToken;

class CreatedUserDto extends ParentDto
{
    public function __construct(
        public readonly User $user,
        public readonly NewAccessToken $token,
    ) {
    }
}
