<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzRolesPermissionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_roles_permissions_connections', function(Blueprint $table)
		{
			$table->foreign('permission_id', 'fk_pz_roles_permissions_connections_pz_permissions1')->references('id')->on('pz_permissions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('role_id', 'fk_pz_roles_permissions_connections_pz_roles1')->references('id')->on('pz_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_roles_permissions_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_roles_permissions_connections_pz_permissions1');
			$table->dropForeign('fk_pz_roles_permissions_connections_pz_roles1');
		});
	}

}
