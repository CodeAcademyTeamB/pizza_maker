<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPad extends CoreModel
{
    protected $table = 'pm_pad';
    protected $fillable = ['id', 'name', 'calories'];
}
