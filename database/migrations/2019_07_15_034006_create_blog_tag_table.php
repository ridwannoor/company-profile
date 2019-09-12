<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('blog_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('blog_tag', function (Blueprint $table) {
            $table->foreign('blog_id')->references('id')->on('blogs');
        });
        
        Schema::table('blog_tag', function (Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        // Schema::dropForeign(['blog_tag_blog_id_foreign']);
        $table->dropForeign(['blog_id']);
        $table->dropForeign(['tag_id']);
        Schema::dropIfExists('blog_tag');
    }

}
