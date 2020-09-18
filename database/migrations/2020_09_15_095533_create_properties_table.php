<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->decimal('price', 15, 2);
            $table->string('hlurbno');
            $table->string('listingno');
            $table->string('address');
            $table->date('listdate');
            $table->string('lotarea');
            $table->string('floorarea');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('garage');
            $table->timestamps();
            // Foreign Keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('property_type_id')->references('id')->on('property_types');
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
