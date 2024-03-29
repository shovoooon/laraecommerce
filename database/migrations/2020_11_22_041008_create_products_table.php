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
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('slug')->nullable();
            $table->decimal('price', 15, 2);
            $table->decimal('offer_price', 15, 2)->nullable();
            $table->integer('quantity')->default(1);
            $table->tinyInteger('status')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->integer('admin_id')->unsigned();
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
        Schema::dropIfExists('products');
    }
}
