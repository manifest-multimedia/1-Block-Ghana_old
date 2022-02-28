<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_gallery', function (Blueprint $table) {
           /*  $table->integer('property_id')->unsigned();
            $table->integer('gallery_id')->unsigned(); */
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
            $table->foreignId('amenity_id')->constrained('galleries')->onDelete('cascade');
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
        Schema::dropIfExists('property_galleries');
    }
}
