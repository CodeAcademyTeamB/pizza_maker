<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMRolePermissionsConn extends CoreModel
{
    protected $table = 'pm_role_permissions_conn';
    protected $fillable = ['role_id','permisison_id'];
}
