<?php

use Illuminate\Database\Migrations\Migration;

class CreateMatchessentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_sent', function($table) {
            $table->increments('id');
            $table->integer('person1_id')->unsigned();
            $table->integer('person2_id')->unsigned();
            $table->boolean('person1_seen')->nullable();
	    $table->boolean('person2_seen')->nullable();

	    $table->foreign('person1_id')->references('id')->on('users')->onDelete('cascade');
	    $table->foreign('person2_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matches_sent');
    }

}
