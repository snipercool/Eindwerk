<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EducationTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(CourseFaseTableSeeder::class);
        $this->call(EducationUserTableSeeder::class);

    }
}
