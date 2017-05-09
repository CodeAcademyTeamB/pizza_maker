<?php

namespace App\Models;

class PmPads extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pad';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
