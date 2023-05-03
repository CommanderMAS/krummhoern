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
        Schema::create('aktuelles', function (Blueprint $table) {
            //Standard-ID
            $table->id();

            //Data
            $table->string('image');
            $table->string('title');
            $table->text('intro');
            $table->text('content');
            $table->string('category')->default("Nachricht");
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->tinyInteger('topnews')->default(0);

            //deaktiviert bzw inaktiv
            $table->tinyInteger('active')->default(1);

            //Timestamps
            $table->timestamps();

            //Indizes
            $table->index('id');
            $table->index('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktuelles');
    }
};
