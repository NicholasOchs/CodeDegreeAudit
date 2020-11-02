<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perm_role', function (Blueprint $table){
            $table->foreignId('permissions_Id');
            $table->foreignId('roles_Id');
        });
    }
}
