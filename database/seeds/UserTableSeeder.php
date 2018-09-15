<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //factory(App\Professor::class,20)->create();


        /*CET Profs*/
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

        DB::table('users')->insert([
            'name' => 'Khatalyn Mata',
            'email' => 'kmata@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Charlito Molina',
            'email' => 'cmolina@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Paul Valderama',
            'email' => 'pvalderama@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan Tallara',
            'email' => 'jtallara@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Clydelle Rondaris',
            'email' => 'crondaris@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Charles Juarizo',
            'email' => 'cjuarizo@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);
        /*End CET profs */

        /*CAUP Profs*/
        DB::table('users')->insert([
            'name' => 'Gil Evasco',
            'email' => 'gevasco@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);
        /*End CAUP Profs*/

        /*CPT Profs*/
        DB::table('users')->insert([
            'name' => 'Jamaella Gomez',
            'email' => 'jgomez@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);
        /*End CPT Profs*/

        /*CS Profs*/
        DB::table('users')->insert([
            'name' => 'Rainier Velasco',
            'email' => 'rvelasco@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Ma. Joanna Astorga',
            'email' => 'jastorga@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Janette Lagos',
            'email' => 'jlagos@mail.com',
            'password' => bcrypt('secret'),
            'type' => 'PROFESSOR',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'remember_token' => str_random(10),
        ]);
        /*End CS Profs*/

    }
}
