<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transaction_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_detail_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');

            $table->foreign('transaction_detail_id')->references('id')->on('transaction_detail')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_transaction_detail');
    }
}