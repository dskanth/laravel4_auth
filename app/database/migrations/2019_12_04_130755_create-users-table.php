<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('first_name', 30);
			$table->string('last_name', 30);
			$table->string('username', 30)->unique();
			$table->string('email', 100)->unique();
			$table->string('password', 64);
			$table->string('last_login_date', 64)->nullable();
			$table->string('remember_token', 100)->nullable();
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
		//
	}

}
