<?php

namespace App\Models;



class PmPizzaIngridientsConn extends CoreModel
{
    protected $table = "pm_pizza_ingridients_conn";
    protected $fillable = ['id', 'pizza_id', 'ingridients_id'];
}
