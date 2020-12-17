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
                'role' => 'Admin',
            ],
            [
                // 'created_at' => '',
                // 'updated_at' => '',
                'role' => 'Editor',
            ],
            [
                // 'created_at' => '',
                // 'updated_at' => '',
                'role' => 'Member',
            ],
            [
                // 'created_at' => ,
                // 'updated_at' => '',
                'role' => 'Developer',
            ]
        );
    }
}
