<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Reset Users & Roles
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        \Spatie\Permission\Models\Role::truncate();
        \Spatie\Permission\Models\Permission::truncate();
        \Illuminate\Support\Facades\DB::table('model_has_roles')->truncate();
        \Illuminate\Support\Facades\DB::table('role_has_permissions')->truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 2. Run Shield Generator to populate permissions
        // We do this via Artisan command in the seeder or just assume shield:generate was run.
        // For reliability, we'll create the roles here.

        // Create Super Admin
        $superAdminRole = \Spatie\Permission\Models\Role::create(['name' => 'super_admin']);
        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@juragan.com',
            'password' => bcrypt('password'),
            'whatsapp_number' => '08123456789',
        ]);
        $admin->assignRole($superAdminRole);

        // Create Sales
        $salesRole = \Spatie\Permission\Models\Role::create(['name' => 'sales']);
        $sales = User::create([
            'name' => 'Sales Juragan',
            'email' => 'sales@juragan.com',
            'password' => bcrypt('password'),
            'whatsapp_number' => '08987654321',
        ]);
        $sales->assignRole($salesRole);

        // Create Owner
        $ownerRole = \Spatie\Permission\Models\Role::create(['name' => 'owner']);
        User::create([
            'name' => 'Owner Juragan',
            'email' => 'owner@juragan.com',
            'password' => bcrypt('password'),
            'whatsapp_number' => '08111111111',
        ])->assignRole($ownerRole);

        // Create Customer
        $customerRole = \Spatie\Permission\Models\Role::create(['name' => 'customer']);
        User::create([
            'name' => 'Pelanggan Setia',
            'email' => 'user@juragan.com',
            'password' => bcrypt('password'),
            'whatsapp_number' => '08122222222',
        ])->assignRole($customerRole);

        // 3. Sync Permissions (Make sure shield:generate --all has been run)
        // We will assign permissions that exist.
        $salesPermissions = [
            'view_car', 'view_any_car', 'create_car', 'update_car',
            'view_brand', 'view_any_brand', 'create_brand', 'update_brand',
            'view_category', 'view_any_category', 'create_category', 'update_category',
            'view_booking', 'view_any_booking',
        ];
        
        foreach ($salesPermissions as $permission) {
            if (\Spatie\Permission\Models\Permission::whereName($permission)->exists()) {
                $salesRole->givePermissionTo($permission);
            }
        }

        $ownerPermissions = [
            'view_car', 'view_any_car',
            'view_brand', 'view_any_brand',
            'view_category', 'view_any_category',
            'view_booking', 'view_any_booking',
            'view_role', 'view_any_role',
        ];

        foreach ($ownerPermissions as $permission) {
            if (\Spatie\Permission\Models\Permission::whereName($permission)->exists()) {
                $ownerRole->givePermissionTo($permission);
            }
        }
    }
}
