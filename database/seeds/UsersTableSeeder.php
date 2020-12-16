<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->DB::insert(
            ['name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at'=> Carbon\Carbon::now(),
            'password'=> '1234', 
            'remember_token'=> '',
            'created_at'=> Carbon\Carbon::now(),
            'updated_at'=>'',
            'role'=>'1',
            'status'=>'1'
            ]
        )  
    }
}
