<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$users = DB::table('profile')->whereBetween('id',[1,20])->get();*/
        $users = DB::table('users')->get();
        foreach($users as $user)
        {
            factory(App\Profile::class)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
