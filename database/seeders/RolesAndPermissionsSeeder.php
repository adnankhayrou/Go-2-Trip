<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'add product']);
        Permission::create(['name' => 'edit All product']);
        Permission::create(['name' => 'edit My product']);
        Permission::create(['name' => 'delete All product']);
        Permission::create(['name' => 'delete My product']);

        Permission::create(['name' => 'add city']);
        Permission::create(['name' => 'edit city']);
        Permission::create(['name' => 'delete city']);

        Permission::create(['name' => 'add category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);

        Permission::create(['name' => 'add SubCategory']);
        Permission::create(['name' => 'edit SubCategory']);
        Permission::create(['name' => 'delete SubCategory']);

        Permission::create(['name' => 'add comment']);
        Permission::create(['name' => 'edit comment']);
        Permission::create(['name' => 'delete comment']);

        // Define roles available
        $admin = 'admin';
        $seller = 'seller';
        // $user = 'user';

        Role::create(['name' => $admin])->givePermissionTo(Permission::all());

        Role::create(['name' => $seller])->givePermissionTo([
            'add product',
            'edit My product',
            'delete My product',
            'add comment',
            'edit comment',
            'delete comment',
        ]);

        // Role::create(['name' => $user])->givePermissionTo([
        //     'add comment',
        //     'edit comment',
        //     'delete comment',
        // ]);
    }
}
