<?php

namespace App\Models;




class PmCheese extends CoreModel
{
    protected $table = "pm_cheese";
    protected $fillable = ['id', 'name', 'calories'];
}
