<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPosts extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('text');

			$table->integer('id_subject')->unsigned()->nullable();
			$table->foreign('id_subject')->references('id')->on('subjects')->onDelete('cascade');

			$table->integer('id_user')->unsigned()->nullable();
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

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
		Schema::dropIfExists('posts');
	}
}
