<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMUserRolesConn extends CoreModel
{
    protected $table = 'pm_user_roles_conn';
    protected $fillable = ['role_id','user_id'];
}
