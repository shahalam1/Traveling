<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{

    public function up()
    {
        Schema::create('reservation_users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
            $table->string('email')->unique();
			$table->string('mobile');
			$table->string('checkin');
			$table->string('checkout');
			$table->string('adults');
			$table->string('kids');
			$table->string('roomtype');
			$table->string('roomno');
			$table->string('description');
			
			
			$table->rememberToken();
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
        Schema::dropIfExists('reservation_users');
    }
}
