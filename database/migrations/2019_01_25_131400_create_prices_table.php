<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 5,2);
            $table->timestamps();

            $table->unsignedInteger('product_id');
            $table->unsignedInteger('price_category_id');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('price_category_id')->references('id')->on('price_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
