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
            [
                'email'             => 'r0696370@student.thomasmore.be',
                'password'          => Hash::make('Nicolas123'),
                'firstname'         => 'Nicolas',
                'lastname'          => 'Vanhuynegem',
                'studentNumber'     => 'r0696370',
                'year_of_join'      => '2017',
            ],

        ]);
    }
}
