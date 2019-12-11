<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('phone')->unique();
			$table->string('password');
			$table->string('api_token')->nullable();
			$table->string('pin_code')->nullable();
			$table->string('image')->default('general.png');
			$table->boolean('active')->default(1);
			$table->integer('district_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}