<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($professor_id, $college_id)
    {
        //
        $course = Course::where('professor_id', '=', $professor_id)
            ->where('college_id', '=', $college_id)->first();
        $professor = $course->professor;
        $college = $course->college;

        $file_path = "/professors/$professor->name";

        $context = [
            'course' => $course,
            'professor' => $professor,
            'college' => $college,
            'file_path' => $file_path,
        ];

        return view('courses.show')->with($context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($professor_id, $college_id)
    {
        //

        if (strcmp(auth()->user()->type, 'PROFESSOR'))
        {
            $course = Course::where('professor_id', '=', $professor_id)
                ->where('college_id', '=', $college_id)->first();
            return view('courses.edit');
        }
        else
        {
            return redirect(back());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
