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
        Schema::create('changed_data', function (Blueprint $table) {
            $table->id();
            $table->text('hebenummer',255);
            $table->text('name',255);
            $table->text('vorname',255);
            $table->text('nachname',255);
            $table->text('email',255);
            $table->text('strasse',255);
            $table->text('plz',255);
            $table->text('ort',255);
            $table->text('iban',255);
            $table->text('kontoinhaber',255);
            $table->text('einzug',255);
            $table->text('sonstiges',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
