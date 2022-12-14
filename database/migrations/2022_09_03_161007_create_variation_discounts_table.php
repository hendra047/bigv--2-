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
        Schema::create('variation_discounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_variation_id')->index();
            $table->foreign('product_variation_id')->references('id')->on('product_variations')->onDelete('cascade');
            $table->unsignedBigInteger('discount_id')->index();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
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
        Schema::dropIfExists('variation_discounts');
    }
};
