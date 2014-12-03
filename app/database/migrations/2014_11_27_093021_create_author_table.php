<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::table("authors", function(Blueprint $table){
      Schema::create("authors", function(Blueprint $table){
        $table->increments("id");
        $table->string("name");
        $table->text("bio");
        $table->timestamps();
      });      
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table("authors", function(Blueprint $table){
      //
    });
	}

}
