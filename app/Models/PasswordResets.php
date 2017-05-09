<?php

namespace App\Models;

class PasswordResets extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'password_resets';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['email', 'token'];
}
