<?php

use Illuminate\Database\Seeder;
use App\Professor;
use Illuminate\Support\Facades\DB;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file')->delete();

        $professors = Professor::all();

        $ext = ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'mp4', 'flv', 'wmv', '3gp', 'mp3',
            'm4a', 'm4p', 'ogg', 'wav', 'doc', 'docx', 'pdf'];

        foreach ($professors as $professor)
        {
            for ($x = 0; $x < 2; $x++)
            {
                factory(App\File::class)->create([
                    /*'name' => 'General Information ' . ($x + 1) . '.' . $ext[array_rand($ext)],*/
                    'name' => 'General Information ' . ($x + 1) . '.' . 'pdf',
                    'professor_id' => $professor->user_id,
                ]);
            }
        }
    }
}
