<?php

namespace App\Modules\Authentication\Dto;

use App\Ship\Parents\ParentDto;

class RegisterUserDto extends ParentDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly string $deviceName,
    ) {
    }
}
