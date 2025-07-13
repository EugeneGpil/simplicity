<?php

namespace App\Modules\Authentication\Dto;

use App\Ship\Parents\ParentDto;

class CreateUserDto extends ParentDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
    ) {
    }
}
