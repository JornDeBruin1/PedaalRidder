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
        Schema::create('fietsen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Naam');
            $table->string('Merk');
            $table->string('Type');
            $table->string('RijHoogte');
            $table->string('Beschrijving');
            $table->string('AfbeeldingPad');
            $table->double('Prijs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fietsen');
    }
};
