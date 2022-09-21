<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicecontent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicescontent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicesId');
            $table->string('image');
            $table->string('title');
            $table->longText('text');
            $table->integer('status')->default(1)->comment('0:pasif 1:aktif');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('servicesId')
                ->references('id')
                ->on('servicecategory')
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
        //
    }
}
