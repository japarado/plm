<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\College::class,4)->create();
        $colleges = array(
            'Engineering and Technology',
            'Architecture and Urban Planning',
            'Physical Therapy',
            'Science');

        for ($x = 0; $x < 4; $x++)
        {
            DB::table('college')->where('id',$x+1)->update([
                'name' => $colleges[$x],
            ]);
        }
    }
}
