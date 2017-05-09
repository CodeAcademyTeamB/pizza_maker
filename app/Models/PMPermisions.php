<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPermisions extends CoreModel
{
    protected $table = 'pm_permisions';
    protected $fillable = ['id', 'name'];
}
