<?php

namespace App\Models;


class PmRoles extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_roles';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name', 'permisison_id'];
}
