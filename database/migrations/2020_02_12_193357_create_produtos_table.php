<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('titulo');
            $table->decimal('tamanho', 2,2 )->nullable();
            $table->string('file')->nullable();
            $table->decimal('preco', 6,2)->nullable();          
            $table->text('mapa')->nullable();
            $table->string('cor')->nullable();
            $table->string('descricao')->nullable();
            $table->string('especificacao')->nullable();
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar', ['sim', 'nao'])->default('nao');
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
        Schema::dropIfExists('produtos');
    }
}
