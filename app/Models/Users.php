<?php

namespace App\Models;


class Users extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'users';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'password', 'remember_token'];
}
