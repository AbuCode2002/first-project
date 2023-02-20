<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->integer('count');
            $table->integer('cost');
            $table->timestamps();

            $table->unsignedBigInteger('order_id')->nullable();
            $table->index('order_id', 'post_order_idx');
            $table->foreign('order_id', 'post_order_fk')->on('order')->references('id');

            $table->unsignedBigInteger('product_id')->nullable();
            $table->index('product_id', 'post_product_idx');
            $table->foreign('product_id', 'post_product_fk')->on('product')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
}
