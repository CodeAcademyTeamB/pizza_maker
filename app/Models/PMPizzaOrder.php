<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMPizzaOrder extends CoreModel
{
    protected $table = 'pm_pizza_order';
    protected $fillable = ['id','pad_id','cheese_id','description','user_id'];
}
