<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixTimestampsOnAll extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('likes', function($table){
            $table->timestamps();
        });
        Schema::table('matches_sent', function($table){
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
        Schema::table('likes', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('matches_sent', function($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }

}
