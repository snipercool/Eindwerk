<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            [
                'name'              => 'Interactive Multimedia Design',
                'location'          => 'Mechelen',
                'studyPoints'       => '180',
            ],

        ]);
    }
}
