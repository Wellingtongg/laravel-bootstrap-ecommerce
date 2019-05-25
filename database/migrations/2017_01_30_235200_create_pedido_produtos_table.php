<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pedido_id')->unsigned(); // unsigned: somente inteiros positivos
            $table->bigInteger('produto_id')->unsigned();  // unsigned: somente inteiros positivos
            $table->enum('status', ['RE', 'PA', 'CA']); // Reservado, Pago, Cancelado
            $table->decimal('valor', 6, 2)->default(0);
            $table->decimal('desconto', 6, 2)->default(0);
            $table->bigInteger('cupom_desconto_id')->nullable()->unsigned(); // unsigned: somente inteiros positivos
            $table->timestamps();

            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('cupom_desconto_id')
                ->references('id')
                ->on('cupom_descontos')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
