<?php


use Illuminate\Database\Seeder;

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
        DB::table('college')->insert([
            'name' => 'Eufemia Garcia',
        ]);
    }
}
