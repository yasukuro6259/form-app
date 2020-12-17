<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formcontents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('title');
            $table->string('username');
            $table->string('email');
            $table->text('phoneNumber');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formcontents');
    }
}
