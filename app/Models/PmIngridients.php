<?php

namespace App\Models;


class PmIngridients extends CoreModel
{
    protected $table = "pm_ingridients";
    protected $fillable = ['id', 'name', 'calories'];
}
