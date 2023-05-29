<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migrationm
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('changed_data', function (Blueprint $table) {
            $table->id();
            $table->char('hebenummer',25);
            $table->char('name',255);
            $table->char('vorname',255)->nullable()->default('null');
            $table->char('nachname',255)->nullable()->default('null');
            $table->char('email',255);
            $table->char('strasse',255)->nullable()->default('null');
            $table->char('plz',10)->nullable()->default('null');
            $table->char('ort',100)->nullable()->default('null');
            $table->char('iban',100)->nullable()->default('null');
            $table->char('kontoinhaber',255)->nullable()->default('null');
            $table->char('einzug',255)->nullable()->default('null');
            $table->char('sonstiges',255)->nullable()->default('null');
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
