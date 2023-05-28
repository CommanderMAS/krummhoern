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
            $table->text('name',255)->nullable()->default('null');
            $table->text('vorname',255)->nullable()->default('null');
            $table->text('nachname',255)->nullable()->default('null');
            $table->text('email',255);
            $table->text('strasse',255)->nullable()->default('null');
            $table->text('plz',255)->nullable()->default('null');
            $table->text('ort',255)->nullable()->default('null');
            $table->text('iban',255)->nullable()->default('null');
            $table->text('kontoinhaber',255)->nullable()->default('null');
            $table->text('einzug',255)->nullable()->default('null');
            $table->text('sonstiges',255)->nullable()->default('null');
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
