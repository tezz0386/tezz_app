<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('role_has_permissions')->truncate();
        $permissions = Permission::all();
        $roles = Role::all();
        foreach($roles as $role){
            if($role->name == "Super Admin"){
                $role->syncPermissions($permissions);
            }

            if($role->name == "Admin"){
                $role->syncPermissions($permissions);
            }
            if($role->name == "Agent"){
                $permission = $permissions->where('col_name', 'Sub Agent Management');
                $role->syncPermissions($permission);
            }
            // othe permission can be sync as requirement
        }
        Schema::enableForeignKeyConstraints();
    }
}
