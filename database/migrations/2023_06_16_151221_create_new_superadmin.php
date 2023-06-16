<?php

use App\Models\User;
use App\Models\User_Changes;
use App\Models\User_Rights;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->delete();
        }

        $changed_data = User_Changes::all();
        foreach ($changed_data as $data) {
            $data->delete();
        }

        $email = "deichacht@krummhoern";
        $admin = new User();
        $admin->password = Hash::make($email);;
        $admin->name = "Deichacht Krummhörn";
        $admin->email = 'xdq2ecy8twv7dhf*EV';
        $admin->save();

        $email = "info@carlsmedia.de";
        $admin = new User();
        $admin->password = Hash::make($email);;
        $admin->name = "SuperAdmin";
        $admin->email = 'S2KwD48X_1711MS86MS2021';
        $admin->save();

        $superAdmin = User::query()->where('name','SuperAdmin')->first();
        $rights = new User_Rights();
        $rights->id_user=$superAdmin->id;
        $rights->name="Admin";
        $rights->power=1;
        $rights->save();

        $krummi = User::query()->where('name','Deichacht Krummhörn')->first();
        $rights = new User_Rights();
        $rights->id_user=$krummi->id;
        $rights->id_user=2;
        $rights->name="Admin";
        $rights->power=1;
        $rights->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
