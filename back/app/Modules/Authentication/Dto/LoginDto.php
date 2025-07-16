<?php

namespace App\Modules\Authentication\Dto;

use App\Ship\Parents\ParentDto;

class LoginDto extends ParentDto
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
        public readonly string $deviceName,
    ) {
    }
}
