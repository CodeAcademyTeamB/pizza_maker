<?php

namespace App\Models;



class PmUserRolesConn extends CoreModel
{
    protected $table = "pm_user_roles_conn";
    protected $fillable = ['role_id', 'user_id'];
}
