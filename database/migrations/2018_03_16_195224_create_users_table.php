<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type')->default('N/A') ;
            $table->string('phoneNo')->default('N/A') ;
            $table->string('streetNo')->default('N/A') ;
            $table->string('city')->default('N/A') ;
            $table->string('state')->default('N/A') ;
            $table->string('status')->default('N/A') ;
            $table->string('zipCode')->default('N/A') ;
            $table->string('comments')->default('N/A') ;
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
        Schema::dropIfExists('users');
    }
}
