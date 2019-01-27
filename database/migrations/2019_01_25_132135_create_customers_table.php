<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisation', 255)->nullable();
            $table->string('name', 255)->unique();
            $table->string('phone', 12)->unique();
            $table->string('email', 60)->unique()->nullable();
            $table->string('addres', 255)->nullable();
            $table->text('description')->nullable();

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('price_id');
            $table->unsignedInteger('customer_type_id');
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('price_id')->references('id')->on('prices');
            $table->foreign('customer_type_id')->references('id')->on('customer_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
