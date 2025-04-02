<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('prices')) {
            Schema::create('prices', function (Blueprint $table) {
                $table->id();
                $table->bigIncrements('product_id')->unsigned();
                $table->bigIncrements('currency_id')->unsigned();
                $table->decimal('price');
                $table->timestamps();
                $table->foreign('product_id')->references('id')->on('products');
                $table->foreign('currency_id')->references('id')->on('currencies');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
