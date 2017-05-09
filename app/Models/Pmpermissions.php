<?php

namespace App\Models;

class Pmpermissions extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_permisions';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
