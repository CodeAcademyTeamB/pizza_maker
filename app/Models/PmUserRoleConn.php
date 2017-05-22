<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PmUserRoleConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_user_roles_conn';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['user_id', 'role_id'];
}
