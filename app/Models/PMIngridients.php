<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMIngridients extends CoreModel
{
    protected $table = 'pm_ingridients';
    protected $fillable = ['id', 'name', 'calories'];
}
