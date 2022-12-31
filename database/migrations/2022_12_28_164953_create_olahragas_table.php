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
        Schema::create('olahragas', function (Blueprint $table) {
            $table->string('Sepakbola')->primary();
            $table->text('Basket');
            $table->text('Balap');
            $table->text('Baseball');
            $table->text('Umum');
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
        Schema::dropIfExists('olahragas');
    }
};
