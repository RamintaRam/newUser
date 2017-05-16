<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('surname');
			$table->string('email');
			$table->string('phone', 8);
			$table->string('fb_url')->nullable();
			$table->string('password');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custom_user');
	}

}
