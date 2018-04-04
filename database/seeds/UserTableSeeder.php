<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'email'    => 'test@gmail.com',
        'password' => Hash::make('123456'),
    ));
}

}
