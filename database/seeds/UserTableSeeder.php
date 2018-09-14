<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,20)->create();

        DB::table('users')->insert([
            'name' => 'Ricky James Perez',
            'email' => 'rperez@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'STUDENT',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Eufemia Garcia',
            'email' => 'egarcia@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);
    }
}
