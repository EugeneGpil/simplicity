<?php

namespace App\Ship\Parents;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User;

/**
 * @method static static create(array $attributes = [])
 * @method static Builder|static where(string $column, string $operator = null, mixed $value = null, string $boolean = 'and')
 */
abstract class ParentAuthenticatable extends User
{

}
