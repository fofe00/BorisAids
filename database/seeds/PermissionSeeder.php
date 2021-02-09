<?php

use App\Models\Utilisateurs;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=["admin","contributor"];
        $permissions=['add_user','update_user','delete_user','add_contrib','update_contrib','delete_contrib'];
        foreach ($roles as $value){
            $role = Role::create(['name' => $value]);
        }
        $admin = Role::findByName('admin');
        foreach ($permissions as $value){
            $permission = Permission::create(['name' => $value ]);
            $permission->assignRole($admin);
        }
        DB::table('utilisateurs')->insert([
            'name'=>'LONFO FOFE BLONDEAU',
            'pseudo'=>'ainix',
            'email'=>'blondeaufofe00@gmail.com',
            'mot_de_passe'=>bcrypt('0000'),
        ]);
        $user = Utilisateurs::where('pseudo', 'ainix')->first();
        $user->assignRole('admin');
        $user->assignRole('contributor');
    }
}
