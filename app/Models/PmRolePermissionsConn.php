<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PmRolePermissionsConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_role_permissions_conn';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['role_id','permission_id'];
}
