<?php

namespace App\Modules\Authentication\Requests;

use App\Ship\Parents\ParentRequest;

/**
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $device_name
 */
class RegisterRequest extends ParentRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'device_name' => 'required|string|max:255',
        ];
    }
}
