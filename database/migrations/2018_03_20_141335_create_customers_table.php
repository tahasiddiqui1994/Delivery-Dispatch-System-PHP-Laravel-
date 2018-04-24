<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName')->nullable($value=false)->unique() ;
            $table->string('customerType')->nullable($value=false) ;
            $table->string('streetNo')->nullable($value=false) ;
            $table->string('aptOrSuiteOrOther')->default('N/A') ;
            $table->string('city')->nullable($value=false) ;
            $table->string('state')->nullable($value=false) ;
            $table->bigInteger('zipCode')->default(00000) ;
            $table->string('phoneNo')->default(00000000000) ;
            $table->string('email')->nullable($value=false)->unique()->default('N/A') ;
            $table->string('website') ;
            $table->string('motorCarrierNo')->default('N/A') ;
            $table->string('status')->default('N/A') ;
            $table->bigInteger('taxID')->default(0) ;
            $table->mediumText('comments');
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
        Schema::dropIfExists('customers');
    }
}
