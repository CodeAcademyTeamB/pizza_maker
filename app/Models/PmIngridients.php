<?php

namespace App\Models;

class PmIngridients extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_ingridients';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}
