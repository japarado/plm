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
        factory(App\Course::class, 20)->create();

        $colleges = DB::table('colleges')->get();

        foreach ($colleges as $college)
        {
            switch ($college->name)
            {
                case 'Engineering and Technology':
                    DB::table('course')->insert([
                        'name' => 'Computer Science',
                        'desc' => 'Computer Science is the study of computers and computational systems.
                            Computer science graduates deal mostly with software and software systems; this includes their theory,
                            design, development, and application.',
                        'duration' => 4,
                        'college_id' => $college->id,
                        'professor_id' => 23,
                    ]);
                    DB::table('course')->insert([
                        'name' => 'Computer Engineering',
                        'desc' => 'Computer engineering is the branch of engineering that integrates electronic 
                            engineering with computer sciences. Computer engineers design and develop computer systems 
                            and other technological devices..',
                        'duration' => 4,
                        'college_id' => $college->id,
                        'professor_id' => 22
                    ]);
                    DB::table('course')->insert([
                        'name' => 'Information Technology',
                        'desc' => 'Computer engineering is the branch of engineering that integrates electronic 
                            engineering with computer sciences. Computer engineers design and develop computer systems 
                            and other technological devices..',
                        'duration' => 4,
                        'college_id' => $college->id,
                        'professor_id' => 22
                    ]);
                    break;
                case 'Architecture and Urban Planning':
                    DB::table('course')->insert([]);
                    break;
                case 'Physical Therapy':
                    DB::table('course')->insert([]);
                    break;
                case 'Science':
                    DB::table('course')->insert([]);
                    break;
            }
        }
    }
}
