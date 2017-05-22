<?php

namespace App\Models;



class PmRoles extends CoreModel
{
    protected $table = "pm_roles";
    protected $fillable = ['id', 'name', 'permission_id'];
}
