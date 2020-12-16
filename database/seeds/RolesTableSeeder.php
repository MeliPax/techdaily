<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->DB::insert(
            [
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => '',
                'role' => 'Admin'
            ],
            [
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => '',
                'role' => 'Editor'
            ],
            [
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => '',
                'role' => 'Member'
            ],
            [
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => '',
                'role' => 'Developer'
            ]
        );
    }
}
