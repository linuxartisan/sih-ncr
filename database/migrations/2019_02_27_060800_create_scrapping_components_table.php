<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrappingComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrapping_components', function (Blueprint $table) {
            $table->unsignedInteger('scrapping_product_id');
            $table->unsignedInteger('component_id');
            $table->timestamps();

            $table->foreign('scrapping_product_id')
                  ->references('id')
                  ->on('scrapping_products')
                  ->onDelete('cascade');

            $table->foreign('component_id')
                  ->references('id')
                  ->on('components')
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
        Schema::dropIfExists('scrapping_components');
    }
}
