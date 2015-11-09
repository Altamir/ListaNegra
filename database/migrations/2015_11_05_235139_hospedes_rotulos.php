<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HospedesRotulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes_rotulos', function (Blueprint $table) {
            $table->increments('id');

            $table->text('descri');

            $table->integer('hospede_id')
                ->unsigned();

            $table->foreign('hospede_id')
                ->references('id')
                ->on('hospedes');

            $table->integer('rotulo_id')
                ->unsigned();

            $table->foreign('rotulo_id')
                ->references('id')
                ->on('rotulos');

            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hospedes_rotulos');
    }
}
