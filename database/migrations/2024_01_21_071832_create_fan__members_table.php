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
        Schema::create('fan__members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fan_id');
            $table->foreign('fan_id')->on('fans')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('position');
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
        Schema::dropIfExists('fan__members');
    }
};
