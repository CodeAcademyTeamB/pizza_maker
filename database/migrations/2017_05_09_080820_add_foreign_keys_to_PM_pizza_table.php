<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPMPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PM_pizza', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_DT_pizza_DT_pizza_base')->references('id')->on('PM_bases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cheese_id', 'fk_DT_pizza_DT_pizza_cheese1')->references('id')->on('PM_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_PM_pizza_PM_users1')->references('id')->on('PM_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PM_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_DT_pizza_DT_pizza_base');
			$table->dropForeign('fk_DT_pizza_DT_pizza_cheese1');
			$table->dropForeign('fk_PM_pizza_PM_users1');
		});
	}

}
