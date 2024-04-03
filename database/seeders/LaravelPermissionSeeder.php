<?php

namespace Database\Seeders;

use App\Models\LaravelPermission\Permission;
use App\Models\LaravelPermission\Role;
use Illuminate\Database\Seeder;

class LaravelPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(["name" => "admin"]);
        $permission = Permission::create(["name" => "test"]);
        $role->givePermissionTo($permission);
    }
}
