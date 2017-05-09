<?php

namespace App\Models;


class PmCheeses extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_cheese';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
