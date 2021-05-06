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
            // Control
            $table->id();
            $table->string('public_slug');
            $table->string('secret_slug');
            $table->boolean('is_public');
            $table->enum('rol', ['Administrador', 'Administrativo', 'Profesor']);
            // Personal data
            $table->string('image')->nullable();
            $table->string('profession');
            $table->string('name');
            $table->string('surname');
            $table->date('birthdate');
            $table->string('personal_email');
            $table->string('curp');
            $table->string('rfc');
            $table->enum('civil_status', ["Soltero", "Casado", "Viudo", "Union Libre", "Divorciado", "Separación En Proceso", "Concubinato"]);
            $table->enum('sexo', ['Hombre', 'Mujer']);
            // Address
            $table->string('personal_address');
            $table->string('origin');
            // json
            $table->json("family_information")->nullable();
            $table->json("institutions")->nullable();
            $table->json("experiences")->nullable();
            $table->json("skills")->nullable();
            // Control access
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->enum('status', ['Activo', 'Inactivo'])->default('Activo');
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
