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
        $data = [
            ['name' => 'admin'],
            ['name' => 'partner'],
            ['name' => 'designer'],
        ];
        \Illuminate\Support\Facades\DB::table('roles')->insert($data);

        $roles = \App\Models\Role::all();

        $users = \App\User::all();

        if($users->isNotEmpty() && $roles->isNotEmpty()){
            foreach ($users as $user){
                $dataRole[] = [
                    'user_id' => $user->id,
                    'role_id' => $user->id == 1 ? 1 : rand(1,3)
                ];
            }
            \Illuminate\Support\Facades\DB::table('role_user')->insert($dataRole);
        }

    }
}
