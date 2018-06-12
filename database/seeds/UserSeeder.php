<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Admin Main';
        $user->email = 'user.main@myadmin.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
