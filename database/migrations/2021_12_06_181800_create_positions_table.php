<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedBigInteger('technique_id');
                $table->foreign('technique_id')
                ->references('id')
                ->on('techniques')
                ->onDelete('cascade');
            $table->unsignedBigInteger('inverse_id');
                $table->foreign('inverse_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('positions');
    }
}
