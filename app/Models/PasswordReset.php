<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @package App\Models
 */
class PasswordReset extends Model
{    
    public $fillable = [
        'email',
        'token',
        'created_at',
    ];
}
