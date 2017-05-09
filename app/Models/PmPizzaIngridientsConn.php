<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PmPizzaIngridientsConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pizza_ingridients_conn';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['pizza_id', 'ingridients_id'];
}
