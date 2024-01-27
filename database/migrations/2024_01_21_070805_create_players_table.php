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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->string('center');
            $table->float('long');
            $table->unsignedBigInteger('m_team_id');
            $table->foreign('m_team_id')->on('teams')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('l_team_id');
            $table->foreign('l_team_id')->on('teams')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('about');
            $table->string('profile');
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
        Schema::dropIfExists('players');
    }
};
