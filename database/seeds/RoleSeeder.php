<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->delete();

        $roles = array(
            array('role_uuid' => env('USERS_UUID'), 'role_name' => 'user'),
            array('role_uuid' => env('VOTERS_UUID'), 'role_name' => 'voter'),
            array('role_uuid' => env('CONTESTANTS_UUID'), 'role_name' => 'contestant'),
        );

        DB::table('roles')->insert($roles);
    }
}
