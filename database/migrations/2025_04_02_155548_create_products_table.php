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
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 125);
                $table->text('description');
                $table->decimal('price');
                $table->bigInteger('currency_id')->unsigned();
                $table->decimal('tax_cost');
                $table->decimal('manufacturing_cost');
                $table->timestamps();
                $table->foreign('currency_id')->references('id')->on('currencies');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
