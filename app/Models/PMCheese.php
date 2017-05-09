<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMCheese extends CoreModel
{
    protected $table = 'pm_cheese';
    protected $fillable = ['id', 'name', 'calories'];
}
