<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_class', function (Blueprint $table){
            $table->foreignId('catalogs_Id');
            $table->foreignId('classes_Id');
        });
    }
}
