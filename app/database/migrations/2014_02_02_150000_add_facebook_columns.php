<?php

use Illuminate\Database\Migrations\Migration;

class AddFacebookColumns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			$table->string('access_token');
			$table->string('access_token_secret');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
			$table->dropColumn('access_token');
			$table->dropColumn('access_token_secret');
			$table->dropTimestamps();
		});
	}
}
