<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropdownListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropdown_lists', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('id2')->nullable()->comment('Id secundario');
            $table->string('param1', 32)->nullable()->comment('Parametro 1');
            $table->string('param2', 32)->nullable()->comment('Parametro 2');
            $table->string('label', 32)->nullable(false)->comment('Etiqueta del listado');
            $table->string('singular', 128)->nullable(false)->comment('Singular');
            $table->string('plural', 128)->nullable()->comment('Plural');
            $table->unsignedSmallInteger('order')->nullable()->comment('Orden');
            $table->timestamps();

            $table->index('label');
            $table->index('singular');
            $table->index('plural');
            $table->index(['label', 'id2']);
            $table->index(['label', 'param1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropdown_lists');
    }
}
