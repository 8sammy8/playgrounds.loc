<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users[] = [
            'email' => 'admin1@playgrounds.com',
            'name' => 'admin1',
            'password' => bcrypt('12345678')
        ];
       $users[] = [
            'email' => 'admin2@playgrounds.com',
            'name' => 'admin2',
            'password' => bcrypt('12345678')
        ];
        $users[] = [
            'email' => 'partner1@playgrounds.com',
            'name' => 'partner1',
            'password' => bcrypt('12345678')
        ];
       $users[] = [
            'email' => 'partner2@playgrounds.com',
            'name' => 'partner2',
            'password' => bcrypt('12345678')
        ];
        $users[] = [
            'email' => 'designer1@playgrounds.com',
            'name' => 'designer1',
            'password' => bcrypt('12345678')
        ];
       $users[] = [
            'email' => 'designer2@playgrounds.com',
            'name' => 'designer2',
            'password' => bcrypt('12345678')
        ];

        \Illuminate\Support\Facades\DB::table('users')->insert($users);
    }
}
