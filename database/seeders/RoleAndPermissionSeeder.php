<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'index project']);
        Permission::create(['name' => 'show project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'edit project']);
        Permission::create(['name' => 'delete project']);

        
        Permission::create(['name' => 'index task']);
        Permission::create(['name' => 'show task']);
        Permission::create(['name' => 'create task']);
        Permission::create(['name' => 'edit task']);
        Permission::create(['name' => 'delete task']);

        $Student = Role::create(['name' => 'student'])
            ->givePermissionTo(['index project', 'show project', 'create project', 'edit project',
                                'index task', 'show task', 'create task', 'edit task', 'delete task']);

        $Teacher = Role::create(['name' => 'teacher'])
            ->givePermissionTo(['index project', 'show project', 'create project', 'edit project', 'delete project',
            'index task', 'show task', 'create task', 'edit task', 'delete task']);

        $Admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());
    }
}
