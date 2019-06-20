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
        $user = new User;

        $user->email = 'test@playgrounds.com';
        $user->name = 'admin';
        $user->password = bcrypt('12345678');

        $user->save();

        factory(User::class, 20)->create();
    }
}
