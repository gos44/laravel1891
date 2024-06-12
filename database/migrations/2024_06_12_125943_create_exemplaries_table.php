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
        Schema::create('exemplaries', function (Blueprint $table) {
            $table->id();
            $table->text('localizacion');
            //creamos el campo para albergar la llave foranea
            $table->unsignedBigInteger('book_id')->unique();
            //asociamos el user_id al id de la tabla user
            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade')//el otro estado es SET_NULL
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplaries');
    }
};
