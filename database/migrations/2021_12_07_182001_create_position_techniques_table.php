<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_techniques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->unsignedBigInteger('technique_id');
            $table->foreign('technique_id')->references('id')->on('techniques');
            $table->unsignedBigInteger('inverse_tech_id')->nullable();
            $table->foreign('inverse_tech_id')->references('id')->on('techniques');
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
        Schema::dropIfExists('position_techniques');
    }
}
