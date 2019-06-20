<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'partner'],
            ['name' => 'designer'],
        ];
        \Illuminate\Support\Facades\DB::table('roles')->insert($roles);

        $roleUser[] = [
            'user_id' => 1,
            'role_id' => 1
        ];
        $roleUser[] = [
            'user_id' => 2,
            'role_id' => 1
        ];
        $roleUser[] = [
            'user_id' => 3,
            'role_id' => 2
        ];
        $roleUser[] = [
            'user_id' => 4,
            'role_id' => 2
        ];
        $roleUser[] = [
            'user_id' => 5,
            'role_id' => 3
        ];
        $roleUser[] = [
            'user_id' => 6,
            'role_id' => 3
        ];

        \Illuminate\Support\Facades\DB::table('role_user')->insert($roleUser);
    }
}
