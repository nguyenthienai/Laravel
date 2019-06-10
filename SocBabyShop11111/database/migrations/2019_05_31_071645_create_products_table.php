<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->unsignedBigInteger('type_id');
            $table->text('description');
            $table->float('unitprice');
            $table->float('promotionprice')->nullable();
            $table->string('unit',10);
            $table->string('image',250);
            $table->tinyInteger('new');
            $table->timestamps();
            $table->foreign('type_id')
                ->references('id')
                ->on('type_products')
                ->onDelete('cascade');
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
