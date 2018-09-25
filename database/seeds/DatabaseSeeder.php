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
        $this->call(UserTableSeeder::class);
        $this->call(CollegeTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(FileTableSeeder::class);
    }
}
