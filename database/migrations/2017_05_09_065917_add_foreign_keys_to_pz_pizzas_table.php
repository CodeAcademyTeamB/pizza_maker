<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_pizzas', function(Blueprint $table)
		{
			$table->foreign('crust_id', 'fk_pz_order_pz_base1')->references('id')->on('pz_crusts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cheese_id', 'fk_pz_pizzas_pz_cheese1')->references('id')->on('pz_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_pz_pizzas_pz_users1')->references('id')->on('pz_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_pizzas', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_order_pz_base1');
			$table->dropForeign('fk_pz_pizzas_pz_cheese1');
			$table->dropForeign('fk_pz_pizzas_pz_users1');
		});
	}

}
