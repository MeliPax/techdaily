<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('1234'),
                'remember_token' => '',
                'role' => '1',
                'status' => '1'
            ],
            [
                'name' => 'user1',
                'email' => 'user1@mail.com',
                'password' => Hash::make('1234'),
                'remember_token' => '',
                'role' => '3',
                'status' => '1'
            ],[
                'name' => 'user2',
                'email' => 'user2@mail.com',
                'password' => Hash::make('1234'),
                'remember_token' => '',
                'role' => '3',
                'status' => '1'
            ],[
                'name' => 'user3',
                'email' => 'user3@mail.com',
                'password' => Hash::make('1234'),
                'remember_token' => '',
                'role' => '3',
                'status' => '1'
            ],[
                'name' => 'user4',
                'email' => 'user4@mail.com',
                'password' => Hash::make('1234'),
                'remember_token' => '',
                'role' => '3',
                'status' => '1'
            ]
        );
    }
}
