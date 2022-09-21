<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams',function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->integer('status')->default(1)->comment('0:pasif 1:aktif');
            $table->softDeletes();
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
        //
    }
}
