<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                // 'created_at' => '',
                // 'updated_at' => '',
                'role' => 'admin',
            ],
            [
                // 'created_at' => '',
                // 'updated_at' => '',
                'role' => 'editor',
            ],
            [
                // 'created_at' => '',
                // 'updated_at' => '',
                'role' => 'member',
            ],
            [
                // 'created_at' => ,
                // 'updated_at' => '',
                'role' => 'developer',
            ]
            ,
            [
//                 'created_at' => Carbon\Carbon::now(),
//                 'updated_at' => '',
                'role' => 'senior_editor'
            ]
        );
    }
}
