<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Messages', function (Blueprint $table) {
            $table->id();
            $table->string('letterNo');
            $table->string('date');
            $table->string('title');
            $table->string('detail');
            $table->string('referLetter');
            $table->foreignId('sender_id')->constrained('users');
            $table->foreignId('recipient_user_id')->constrained('users');
            $table->string('files')->nullable();
            $table->timestamps();

            // $table->foreign('sender_id')->references('id')->on('users');
            // $table->foreign('recipient_user_id')->references('id')->on('users');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Messages');
    }
}
