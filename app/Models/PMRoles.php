<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMRoles extends CoreModel
{
    protected $table = 'pm_roles';
    protected $fillable = ['id','name','permisison_id'];
}
