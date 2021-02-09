<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            'name'=>'LONFO FOFE BLONDEAU',
            'pseudo'=>'ainix',
            'email'=>'blondeaufofe00@gmail.com',
            'mot_de_passe'=>bcrypt('fofe00'),
        ]);
    }
}
