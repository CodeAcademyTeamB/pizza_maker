<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaIngridientsConn extends CoreModel
{
    protected $table = 'pm_pizza_ingridients_conn';
    protected $fillable = ['pizza_id','ingridients_id'];
}
