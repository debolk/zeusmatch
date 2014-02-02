<?php

use Illuminate\Database\Migrations\Migration;

class ChangeDefaultValues extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE `users` CHANGE COLUMN `gender_wanted_male` `gender_wanted_male` tinyint(1) NOT NULL DEFAULT TRUE;");
		DB::statement("ALTER TABLE `users` CHANGE COLUMN `gender_wanted_female` `gender_wanted_female` tinyint(1) NOT NULL DEFAULT TRUE;");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
