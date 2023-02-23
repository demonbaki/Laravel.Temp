<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('price', 6, 2);
            $table->string('img');
            //colonna della foreign key
            $table->unsignedBigInteger('user_id');
            //ora costruisco il collegamento effettivo
            $table->foreign('user_id')->references('id')->on('users');//assegna un vincolo alla colonna colonna che si riferisce alla colonna 'id' nella tabella 'users'
           
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
        Schema::dropIfExists('products');
    }
};
