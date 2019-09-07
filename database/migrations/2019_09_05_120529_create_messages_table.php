<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->string('send_to');
            $table->string('send_from');
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->text('body');
            $table->text('header');
            $table->boolean('is_important')->default(false);
            $table->boolean('is_spam')->default(false);
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
        Schema::dropIfExists('messages');
    }
}
