<?php


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
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
                /*DB::table('course')->insert([
                    'name' => 'Course Name',
                    'desc' => 'Please put course description here. Thanks',
                    'duration' => 4,
                    'picture' => '/img/courses/img-1.png',
                    'college_id' => $college->id,
                    'professor_id' => $randomProfessor->user_id,
                ]);*/
            }
        }
    }
}
