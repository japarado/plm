<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilesRequest;
use App\Professor;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        $professor = Professor::find($id);
        $colleges = $professor->colleges;
        $profile = Profile::find($id);

        $context = [
            'profile' => $profile,
            'user' => $user,
            'colleges' => $colleges,
            'professor' => $professor,
        ];

        return view('profiles.show')->with($context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $profile = User::find($id)->profile;

        $context = [
            'profile' => $profile
        ];

        return view('profiles.edit')->with($context);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profile = Profile::find($id);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->save();

        $profile->desc = $request->input('desc');
        $profile->save();
        
        return redirect(route('profiles.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
