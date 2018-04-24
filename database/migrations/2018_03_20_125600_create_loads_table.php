<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('LoadNo')->unique();
            $table->string('customerName')->nullable($value = false) ;
            $table->string('driverName')->nullable($value = false) ;
            $table->string('truckNo')->nullable($value = false) ;
            $table->string('from')->nullable($value = false) ;
            $table->string('to')->nullable($value = false) ;
            $table->string('shipper')->nullable($value = false)  ;
            $table->string('pickup')->nullable($value = false) ;
            $table->string('bol')->nullable($value = false)->default('N/A') ;
            $table->string('customerInfo')->nullable($value = false)->default('N/A') ;
            $table->bigInteger('weight')->unsigned()->default(0) ;
            $table->bigInteger('quantity')->unsigned()->default(0) ;
            $table->string('unit')->nullable($value = false)  ;
            $table->mediumText('comments');
            $table->string('delivery')->nullable($value = false) ;
            $table->string('deliveryDate')->nullable($value = false) ;
            $table->bigInteger('primaryFee')->nullable($value = false)->default(0) ;
            $table->string('primaryFeeType')->nullable($value = false)->default(0) ;
            $table->bigInteger('fscAmount')->nullable($value = false)->default(0) ;
            $table->string('fscAmountType')->nullable($value = false)->default(0) ;
            $table->bigInteger('additional')->nullable($value = false)->default(0) ;
            $table->bigInteger('detention')->nullable($value = false)->default(0) ;
            $table->bigInteger('lumper')->nullable($value = false)->default(0) ;
            $table->bigInteger('topoff')->nullable($value = false)->default(0) ;
            $table->bigInteger('tarp')->nullable($value = false)->default(0) ;
            $table->bigInteger('invoiceAdvance')->nullable($value = false)->default(0) ;
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
        Schema::dropIfExists('loads');
    }
}
