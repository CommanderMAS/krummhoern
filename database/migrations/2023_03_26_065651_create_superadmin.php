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
        $admin->password="b4decba6f9820e0c5650fc9eb768e5abe61127547c3a84118cd34c0df2092311";
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
