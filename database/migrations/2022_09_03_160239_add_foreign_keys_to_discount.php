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
        Schema::table('discounts', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->index()->nullable();
            $table->foreign('type_id')->references('id')->on('discount_types')->onDelete('cascade');
            $table->unsignedBigInteger('applicable_id')->index()->nullable();
            $table->foreign('applicable_id')->references('id')->on('discount_applicables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discounts', function (Blueprint $table) {
            //
        });
    }
};
