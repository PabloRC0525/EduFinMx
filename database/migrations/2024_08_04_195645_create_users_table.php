<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('Users', function (Blueprint $table) {
        $table->id();
        $table->string('Nombre');
        $table->string('ApellidoPaterno');
        $table->string('ApellidoMaterno');
        $table->string('email')->unique();
        $table->string('Telefono'); 
        $table->string('password');
        $table->timestamps();
        $table->rememberToken();
      
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Users');
    }
};
