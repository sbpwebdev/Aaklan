<?php

// database/seeders/RolesAndPermissionsSeeder.php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create Permissions
        $viewPermission = Permission::create(['name' => 'view_user']);
        $editPermission = Permission::create(['name' => 'edit_user']);

        // Assign Permissions to Roles
        $adminRole->permissions()->attach([$viewPermission->id, $editPermission->id]);
        $userRole->permissions()->attach([$viewPermission->id]);

        // Optionally, assign roles to a user
        $user = User::find(1);  // assuming a user exists
        $user->roles()->attach($userRole);
    }
}
