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
            $table->string('name');
            $table->string('surname');
            $table->date('birthdate');
            $table->string('personal_email');
            $table->string('curp');
            $table->string('rfc');
            $table->string('origin');
            $table->enum('civil_status', ["Soltero", "Casado", "Viudo", "Union Libre", "Divorciado", "Separación En Proceso", "Concubinato"]);
            $table->enum('sexo', ['Hombre', 'Mujer']);
            // Address
            $table->string('personal_address');
            $table->string("place_of_birth");
            // json
            $table->json("family_information");
            $table->json("institutions");
            $table->json("experiences");
            $table->json("habilidades");
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
