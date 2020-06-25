<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase__products', function (Blueprint $table) {
            $table->id();
            $table->integer("product_id");
            $table->integer("purchase_id");
            $table->string("unit");
            $table->double("quantity");
            $table->string("property");
            $table->double("price");
            $table->double("left");
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
        Schema::dropIfExists('purchase__products');
    }
}
