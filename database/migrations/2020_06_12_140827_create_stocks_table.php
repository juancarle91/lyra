<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('talle')
                ->nullable()
                ->default(null);
            $table->string('color')
                ->nullable()
                ->default(null);
            $table->integer('cantidad')
                ->unsigned();
            $table->integer('cantidad_min')
                ->unsigned();
            $table->bigInteger('producto_id')
                ->unsigned();
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
