<?php

use Illuminate\Database\Migrations\Migration;

class OrganisationsWantedAddTimestamp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('organisations_wanted', function($table){
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
        Schema::table('organisations_wanted', function($table){
            $table->dropTimestamps();
        });
	}

}
