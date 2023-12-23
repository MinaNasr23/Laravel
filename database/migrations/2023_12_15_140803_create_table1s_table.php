<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table1s', function (Blueprint $table) {
            $table->id();
            $table->string('SKU')->unique();
            $table->string('Name');
            $table->string('Price');
            $table->enum('Type_switcher',['DVD', 'Furniture', 'Book']);
            $table->integer('Size')->nullable();
            $table->integer('Height')->nullable();
            $table->integer('Width')->nullable();
            $table->integer('Length')->nullable();
            $table->integer('Weight')->nullable();
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
        Schema::dropIfExists('table1s');
    }
}
