<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $email= "deichacht@krummhoern";
        $admin = User::query()->where('email',$email)->first();
        $admin->password=$email;
        $admin->name="Deichacht Krummhörn";
        $admin->email='$2a$10$Y43iQ/NxkRJ0b9NFHOZamuP6IDfReouHmgfi1B69eXpEU.Xfrw5YG';
        $admin->save();

        $email="info@carlsmedia.de";
        $admin = User::query()->where('email',$email)->first();
        $admin->password=$email;
        $admin->name="SuperAdmin";
        $admin->email='$2y$10$cMXyxey6Sg3.unW9BJxqIOiLp/KlV0JmpFSN607lg8lKbIxP9Jbd6';
        $admin->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
