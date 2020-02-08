<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100)->unique();
            $table->text('descripcion',300)->nullable();
            $table->timestamp('fecha_inicio');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('servidor_id');
            $table->unsignedBigInteger('representante_id');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('emp_dominio_id');
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
        Schema::dropIfExists('projects');
    }
}
