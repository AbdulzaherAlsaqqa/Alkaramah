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
        Schema::create('clups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->on('cities')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('establishment')->nullable();
            $table->string('address')->nullable();
            $table->string('founder_name')->nullable();
            $table->string('idea')->nullable();
            $table->unsignedBigInteger('stadium_id')->nullable();
            $table->foreign('stadium_id')->on('stadia')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->date('first_fan')->nullable();
            $table->string('reputation')->nullable();
            $table->string('Football')->nullable();
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
        Schema::dropIfExists('clups');
    }
};
