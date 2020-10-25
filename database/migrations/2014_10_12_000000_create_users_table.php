<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->comment('Nombre(s)');
            $table->string('last_name', 100)->comment('Apellidos');

            $table->string('email', 100)->unique()->comment('Correo electrónico');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->unsignedTinyInteger('gender')->comment('Genero');
            $table->string('mobile_phone', 15)->comment('Teléfono movil');
            $table->mediumText('information')->comment('Información');
            $table->mediumText('comments')->comment('Comentarios');

            $table->unsignedTinyInteger('state')->comment('Estatus');
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
        Schema::dropIfExists('users');
    }
}
