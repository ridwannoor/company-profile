<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('deskripsi');
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(false);
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
        Schema::dropIfExists('testis');
    }
}
