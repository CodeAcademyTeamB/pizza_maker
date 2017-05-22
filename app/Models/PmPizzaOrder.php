<?php

namespace App\Models;

class PmPizzaOrder extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pm_pizza_order';

    /**
     * Table columns
     * @var array
     */
    protected $fillable = ['id','pad_id', 'cheese_id', 'description', 'user_id',];
}
