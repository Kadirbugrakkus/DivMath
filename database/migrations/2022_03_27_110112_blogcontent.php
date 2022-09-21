<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogcontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcontent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('image');
            $table->longText('content');
            $table->string('slug');
            $table->integer('status')->default(1)->comment('0:pasif 1:aktif');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')
                ->references('id')
                ->on('blogcategory')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcontent');
    }
}
