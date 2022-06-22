<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // product id
            $table->id();

            // product name
            $table->string('name', 100);

            // product description
            $table->text('description');

            // product price
            $table->decimal('price', 5, 2);
            
            // default product sizes
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL']);

            // product visibility - published on site or not
            $table->boolean('is_published');

            // product state - on sale or not
            $table->boolean('is_sale');

            // product alphanumeric reference
            $table->string('reference', 50);

            // foreign key pointing to the id column in the categoris table
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

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
};
