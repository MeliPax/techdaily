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
                'role' => 'admin',
            ],
            [
                'role' => 'editor',
            ],
            [
                'role' => 'member',
            ],
            [
                'role' => 'developer',
            ]
            ,
            [ 
                'role' => 'senior_editor'
            ]
        );
    }
}
