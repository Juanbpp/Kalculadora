<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
Use Spatie\Permission\Models\Permission;
Use Spatie\Permission\Models\Role;


class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'usuario']);
         $user = User::find(1);
          $user->assignRole($role1);
        Permission::create(['name'=>'admin'])->assignRole($role1);
   
    }
}
