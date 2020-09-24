<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2)
                ->unsigned()
                ->nullable()
                ->default(0);
            $table->string('foto');
            $table->enum('visible_en', ['Si', 'No'])
                ->nullable()
                ->default(null);
            $table->bigInteger('categoria_id')
                ->unsigned();
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
