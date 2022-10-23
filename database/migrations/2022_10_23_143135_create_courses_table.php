<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('courses', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name');
			$table->text('description');
			$table->string('image')->nullable();
			$table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::dropIfExists('courses');
	}
};
