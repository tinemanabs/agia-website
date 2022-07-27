<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardofdirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardofdirectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('position');
            $table->string('detail1')->nullable();
            $table->string('detail2')->nullable();
            $table->string('detail3')->nullable();
            $table->text('image');
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
        Schema::dropIfExists('boardofdirectors');
    }
}
