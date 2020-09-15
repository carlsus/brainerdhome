<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('propertytype_id');
            $table->unsignedBigInteger('user_id');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
