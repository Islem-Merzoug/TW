<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBouquetFleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bouquet_fleurs', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('bouquet_id')->on('bouquets');
            $table->foreign('id')->references('fleur_id')->on('fleurs');

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
        Schema::dropIfExists('bouquet_fleurs');
    }
}
