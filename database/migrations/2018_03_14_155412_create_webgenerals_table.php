<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebgeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webgenerals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state')->nullable($value=false) ;
            $table->string('city')->nullable($value=false) ;
            $table->bigInteger('zipCode')->default(00000) ;
            $table->string('title')->nullable($value=false)->default() ;
            $table->string('streetNo')->nullable($value=false) ;
            $table->string('companyType')->nullable($value=false) ;
            $table->string('timezone')->default('N/A') ;
            $table->mediumText('comments') ;
            $table->string('phoneNo')->default(00000000000) ;
            $table->string('email')->nullable($value=false)->unique()->default('N/A') ;
            $table->string('aptOrSuiteOrOther')->default('N/A') ;
            $table->string('website') ;
            $table->string('companyName')->nullable($value=false)->unique() ;
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
        Schema::dropIfExists('webgenerals');
    }
}
