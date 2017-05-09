<?php

namespace App\Models;



class PmRolePermissionsConn extends CoreModel
{
    protected $table = "pm_role_permissions_conn";
    protected $fillable = ['id', 'role_id', 'permission_id'];
}
