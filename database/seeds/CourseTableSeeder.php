<?php

use Illuminate\Database\Seeder;

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
        $colleges = App\College::all();

        foreach($colleges as $college)
        {
            $randomProfessorArray = App\Professor::all()->random(6);
            foreach($randomProfessorArray as $randomProfessor)
            {
                factory(App\Course::class)->create([
                    'college_id' => $college->id,
                    'professor_id' => $randomProfessor->user_id,
                ]);
            }
        }
    }
}
