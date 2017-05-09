<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePMPizzaIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PM_pizza_ingredients_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('pizza_id')->index('fk_DT_pizza_ingredients_connection_DT_pizza1_idx');
			$table->string('pizza_ingredients')->index('fk_DT_pizza_ingredients_connection_DT_pizza_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PM_pizza_ingredients_connections');
	}

}
