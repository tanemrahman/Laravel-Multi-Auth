<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $admin_role = Role::create(['name' => 'admin']);
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($admin_role);

        $seller_role = Role::create(['name' => 'seller']);
        $seller = User::create([
            'name' => 'Seller',
            'email' => 'seller@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $seller->assignRole($seller_role);

        $user_role = Role::create(['name' => 'user']);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($user_role);

        // $permission = Permission::create(['name' => 'edit articles']);
    }
}
