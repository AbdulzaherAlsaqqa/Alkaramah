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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('round_id');
            $table->foreign('round_id')->on('rounds')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('l_team_id');
            $table->foreign('l_team_id')->on('teams')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('l_goals');
            $table->unsignedBigInteger('g_team_id');
            $table->foreign('g_team_id')->on('teams')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('g_goals');
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
        Schema::dropIfExists('results');
    }
};
