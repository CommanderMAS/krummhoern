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

        Schema::dropIfExists('changed_data');
        Schema::create('changed_data', function (Blueprint $table) {
            $table->id();
            $table->string('hebenummer',25);
            $table->string('name',300);
            $table->string('vorname',300)->nullable()->default('null');
            $table->string('nachname',300)->nullable()->default('null');
            $table->string('email',300);
            $table->string('strasse',300)->nullable()->default('null');
            $table->string('plz',300)->nullable()->default('null');
            $table->string('ort',300)->nullable()->default('null');
            $table->string('iban',300)->nullable()->default('null');
            $table->string('kontoinhaber',300)->nullable()->default('null');
            $table->string('einzug',300)->nullable()->default('null');
            $table->string('sonstiges',300)->nullable()->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changed_data');
    }
};
