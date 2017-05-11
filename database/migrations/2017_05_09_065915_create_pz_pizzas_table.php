<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePzPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pz_pizzas', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('user_id', 36)->index('fk_pz_pizzas_pz_users1_idx');
			$table->string('crust_id', 36)->index('fk_pz_order_pz_base1_idx');
			$table->string('cheese_id', 36)->nullable()->index('fk_pz_pizzas_pz_cheese1_idx');
			$table->integer('total_calories')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pz_pizzas');
	}

}
