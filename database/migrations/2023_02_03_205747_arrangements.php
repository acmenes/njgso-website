<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrangements', function (Blueprint $table) {
            $table->id();
            $table->string('arrangment_title');
            $table->string('arrangment_game');
            $table->string('arrangment_game_series');
            $table->string('composer');
            $table->string('additional_composer')->nullable();
            $table->string('arranger');
            $table->string('additional_arranger')->nullable();
            $table->string('score_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrangements');
    }
};
