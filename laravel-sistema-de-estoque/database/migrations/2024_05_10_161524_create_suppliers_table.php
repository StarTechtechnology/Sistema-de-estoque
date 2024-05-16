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

        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->unique();
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
        Schema::create('stock_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('amount');
            $table->timestamps();
        });
        Schema::create('stock_accountings', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->timestamps();
        });
        Schema::create('stock_moviments', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->timestamps();
        });
        Schema::create('user_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('cnpj')->unique();
            $table->timestamps();
        });
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('amount');
            $table->decimal('weight');
            $table->decimal('size');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
