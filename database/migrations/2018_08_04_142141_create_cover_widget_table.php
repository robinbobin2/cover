<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoverWidgetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_widget', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cover_id');
            $table->integer('widget_id');
            $table->string('imageAddress')->default('');
            $table->string('fill')->default('#000');
            $table->integer('fontSize')->default('50');
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
        Schema::dropIfExists('cover_widget');
    }
}
