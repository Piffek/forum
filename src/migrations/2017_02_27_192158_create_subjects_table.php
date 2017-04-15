<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('subjects', function (Blueprint $table) {
    		$table->increments('id');
    		
    		$table->integer('id_user')->unsigned()->nullable();
    		$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
    		
    		$table->string('name');
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
    	Schema::dropIfExists('subjects');
    }
}
