<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $colleges = \App\College::all();

        foreach($colleges as $college)
        {
            for($x=0;$x<6;$x++)
            {
                //get random professor
                $randomProfessor = \App\Professor::inRandomOrder()->first();
                //create a course
                factory(App\Course::class)->create([
                    'college_id' => $college->id,
                    'professor_id' => $randomProfessor->user_id,
                ]);
            }
        }
    }
}
