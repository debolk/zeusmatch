<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrganisationswantedTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations_wanted', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
	    $table->enum('organisation', array("Bolk", "Catena", "Wolweze", "Cleopatra", "Biton", "Karpe", "Liber"));

	    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organisations_wanted');
    }

}
