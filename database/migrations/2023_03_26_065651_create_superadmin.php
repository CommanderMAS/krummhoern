<?php

use App\Models\User;
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

        $admin = new User();
        $admin->password='$2a$10$Y43iQ/NxkRJ0b9NFHOZamuP6IDfReouHmgfi1B69eXpEU.Xfrw5YG';
        $admin->name="Deichacht Krummhörn";
        $admin->email="deichacht@krummhoern";
        $admin->save();

        $admin = new User();
        $admin->password='$2y$10$cMXyxey6Sg3.unW9BJxqIOiLp/KlV0JmpFSN607lg8lKbIxP9Jbd6';
        $admin->name="SuperAdmin";
        $admin->email="info@carlsmedia.de";
        $admin->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
