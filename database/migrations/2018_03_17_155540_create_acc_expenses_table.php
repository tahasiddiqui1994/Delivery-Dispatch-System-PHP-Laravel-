<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_expenses', function (Blueprint $table) {
            $table->increments('id') ;
            $table->bigInteger('truckNo') ;
            $table->string('expenseCategory') ;
            $table->string('expenseDate') ;
            $table->string('loadNo') ;
            $table->string('amount') ;
            $table->string('odometerReading')->default('N/A') ;
            $table->mediumText('comments') ;

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
        Schema::dropIfExists('acc_expenses');
    }
}
