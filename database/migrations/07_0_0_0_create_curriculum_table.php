<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('classroom_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('duration')->nullable(); // In minutes
            $table->unsignedInteger('order')->nullable();
            $table->unsignedInteger('status')->nullable();

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
        Schema::drop('curriculum');
    }
}
