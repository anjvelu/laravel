<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
			
		DB::table("authors")->insert(array(
      "name" => "Velu",
      "bio" => "Velu is good author",
      "created_at" => date("Y-m-d H:m:s"),
      "updated_at" => date("Y-m-d H:m:s")
    ));
    DB::table("authors")->insert(array(
     "name" => "Arul",
     "bio" => "Arul is great author",
     "created_at" => date("Y-m-d H:m:s"),
     "updated_at" => date("Y-m-d H:m:s")
    ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table("authors")->delete();
	}

}
