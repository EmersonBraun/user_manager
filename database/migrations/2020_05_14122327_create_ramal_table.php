<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RamalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ramal');
            $table->boolean('used')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ramals');
    }
}