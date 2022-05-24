<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pimages', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('product_id');
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
          $table->string('image');
          $table->tinyInteger('sequence');
          $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('pimages');
    }
}
