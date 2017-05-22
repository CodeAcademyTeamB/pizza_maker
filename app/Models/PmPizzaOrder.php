<?php

namespace App\Models;



class PmPizzaOrder extends CoreModel
{
    protected $table = "pm_pizza_order";
    protected $fillable = ['id', 'pad_id', 'cheese_id','description','user_id'];
}
