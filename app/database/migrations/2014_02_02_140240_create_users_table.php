<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('facebook_id', 255);
            $table->string('name', 255);
            $table->enum('organisation', array("Bolk", "Catena", "Wolweze", "Cleopatra", "Biton", "Karpe", "Liber"))->nullable();
            $table->string('email', 255);
	    $table->string('telephone', 16)->nullable();
	    $table->date('birthday');
            $table->enum('gender', array("M", "F"))->default("F");
	    $table->boolean('gender_wanted_male');
	    $table->boolean('gender_wanted_female');
            $table->boolean('in_relation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
