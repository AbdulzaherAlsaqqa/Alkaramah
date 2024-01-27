<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clup_id');
            $table->foreign('clup_id')->on('clups')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('type');
            $table->string('clothes')->nullable();
            $table->string('clothes_Date')->nullable();
            $table->string('ball')->nullable();
            $table->timestamps();
            $table->uuid();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
