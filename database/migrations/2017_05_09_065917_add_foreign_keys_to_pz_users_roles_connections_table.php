<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzUsersRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_users_roles_connections', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_pz_users_roles_connections_pz_roles1')->references('id')->on('pz_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_pz_users_roles_connections_pz_users1')->references('id')->on('pz_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_users_roles_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_users_roles_connections_pz_roles1');
			$table->dropForeign('fk_pz_users_roles_connections_pz_users1');
		});
	}

}
