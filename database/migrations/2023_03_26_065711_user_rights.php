<?php

use App\Models\User_Rights;
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
        Schema::create('user_rights', function (Blueprint $table) {
            //Standard-ID
            $table->id();

            //Data
            $table->integer('id_user');
            $table->string('name');
            $table->tinyInteger('power')->default(0);

            //Timestamps
            $table->timestamps();
            $table->timestamp('failed_at')->useCurrent();

            //Indizes
            $table->index('id');
            $table->index('power');
            $table->index('name');
            $table->index('id_user');
        });

        $rights = new User_Rights();
        $rights->id_user=1;
        $rights->name="Admin";
        $rights->power=1;
        $rights->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_rights');
    }
};
