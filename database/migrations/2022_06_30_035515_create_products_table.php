<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('cost');
            $table->string('image');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->index('subcategory_id', 'post_subcatedory_idx');
            $table->foreign('subcategory_id', 'post_subcatedory_fk')->on('subcategories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
