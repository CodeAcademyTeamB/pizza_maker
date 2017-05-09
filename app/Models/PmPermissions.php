<?php

namespace App\Models;



class PmPermissions extends CoreModel
{
    protected $table = "pm_permissions";
    protected $fillable = ['id', 'name'];
}
