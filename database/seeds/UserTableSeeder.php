<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
             'role_id' => 1,
             'name' => 'Admin',
             'username' => 'Mr Admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Author',
            'username' => 'Mr Author',
            'email' => 'author@gmail.com',
            'password' => Hash::make('rootauthor'),
       ]);
    }
}
