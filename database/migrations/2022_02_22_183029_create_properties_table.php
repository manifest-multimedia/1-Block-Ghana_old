<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_id');
            $table->foreignId('business_id')->constrained('businesses')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('set null');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->double('price', 8, 2);
            $table->foreignId('currency_id')->constrained('currencies')->onDelete('set null');
            $table->string('size')->nullable();
            $table->string('location')->nullable();
            $table->date('date_built')->nullable();
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
        Schema::dropIfExists('properties');
    }
}