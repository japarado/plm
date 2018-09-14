<?php

use Illuminate\Database\Seeder;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $professors = DB::table('users')->where('type', '=', 'PROFESSOR')->get();

        foreach($professors as $professor)
        {
                DB::table('professor')->insert([
                    'user_id' => $professor->id,
                ]);
        }
    }
}
