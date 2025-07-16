<?php

namespace App\Modules\Authentication\Requests;

use App\Ship\Parents\ParentRequest;

/**
 * @property string $email
 * @property string $password
 * @property string $device_name
 */
class LoginRequest extends ParentRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'device_name' => 'required|string|max:255',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
