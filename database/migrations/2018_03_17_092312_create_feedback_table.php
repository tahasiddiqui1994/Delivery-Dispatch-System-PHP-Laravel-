<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receiverId') ;
            $table->string('receiverName') ;
            $table->string('receiverEmail') ;
            $table->string('receiverStatus') ;
            $table->string('senderId') ;
            $table->string('senderName') ;
            $table->string('senderEmail') ;
            $table->string('senderStatus') ;
            $table->string('title') ;
            $table->string('comments') ;
            $table->string('status') ;
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
        Schema::dropIfExists('feedback');
    }
}
