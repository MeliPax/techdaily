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
                // 'email_verified_at' => Carbon::now(),
                'password' => Hash::make('1234'),
                'remember_token' => '',
                // 'created_at' => Carbon::now(),
                // 'updated_at' => '',
                'role' => '1',
                'status' => '1',
            ]
        );
    }
}
