<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseFaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_fase')->insert([
            [
                'course_id'       => '1',
                'fase'         => '1',
            ],
            [
                'course_id'       => '2',
                'fase'         => '1',
            ],
            [
                'course_id'       => '3',
                'fase'         => '1',
            ],
            [
                'course_id'       => '4',
                'fase'         => '1',
            ],
            [
                'course_id'       => '5',
                'fase'         => '1',
            ],
            [
                'course_id'       => '6',
                'fase'         => '1',
            ],
            [
                'course_id'       => '7',
                'fase'         => '1',
            ],
            [
                'course_id'       => '8',
                'fase'         => '1',
            ],
            [
                'course_id'       => '9',
                'fase'         => '1',
            ],
            /* fase 2 */
            [
                'course_id'       => '10',
                'fase'         => '2',
            ],
            [
                'course_id'       => '11',
                'fase'         => '2',
            ],
            [
                'course_id'       => '12',
                'fase'         => '2',
            ],
            [
                'course_id'       => '13',
                'fase'         => '2',
            ],
            [
                'course_id'       => '14',
                'fase'         => '2',
            ],
            [
                'course_id'       => '15',
                'fase'         => '2',
            ],
            [
                'course_id'       => '16',
                'fase'         => '2',
            ],
            /* choice fase 2 */
            [
                'course_id'       => '17',
                'fase'         => '2',
            ],
            [
                'course_id'       => '18',
                'fase'         => '2',
            ],
            [
                'course_id'       => '19',
                'fase'         => '2',
            ],
            [
                'course_id'       => '20',
                'fase'         => '2',
            ],
            [
                'course_id'       => '21',
                'fase'         => '2',
            ],
            [
                'course_id'       => '22',
                'fase'         => '2',
            ],
            /* fase 3 */
            [
                'course_id'       => '23',
                'fase'         => '3',
            ],
            [
                'course_id'       => '24',
                'fase'         => '3',
            ],
            [
                'course_id'       => '25',
                'fase'         => '3',
            ],
            [
                'course_id'       => '26',
                'fase'         => '3',
            ],
            [
                'course_id'       => '27',
                'fase'         => '3',
            ],
            [
                'course_id'       => '28',
                'fase'         => '3',
            ],
             /* choice fase 3 */
             [
                'course_id'       => '29',
                'fase'         => '3',
            ],
            [
                'course_id'       => '30',
                'fase'         => '3',
            ],
            [
                'course_id'       => '31',
                'fase'         => '3',
            ],
            [
                'course_id'       => '32',
                'fase'         => '3',
            ],
            /* choice fase 2&3 */
            [
                'course_id'       => '33',
                'fase'         => '2',
            ],
            [
                'course_id'       => '33',
                'fase'         => '3',
            ],
            [
                'course_id'       => '34',
                'fase'         => '2',
            ],
            [
                'course_id'       => '34',
                'fase'         => '3',
            ],
            [
                'course_id'       => '35',
                'fase'         => '2',
            ],
            [
                'course_id'       => '35',
                'fase'         => '3',
            ],
            [
                'course_id'       => '36',
                'fase'         => '2',
            ],
            [
                'course_id'       => '36',
                'fase'         => '3',
            ],
            [
                'course_id'       => '37',
                'fase'         => '2',
            ],
            [
                'course_id'       => '37',
                'fase'         => '3',
            ],
            [
                'course_id'       => '38',
                'fase'         => '2',
            ],
            [
                'course_id'       => '38',
                'fase'         => '3',
            ],
            [
                'course_id'       => '39',
                'fase'         => '2',
            ],
            [
                'course_id'       => '39',
                'fase'         => '3',
            ],
        ]);
    }
}
