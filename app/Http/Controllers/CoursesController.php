<?php

namespace App\Http\Controllers;

use App\College;
use App\Course;
use App\Http\Requests\CoursesRequest;
use App\Professor;
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
    public function show($id)
    {
        //
        $course = Course::find($id);
        $professor = $course->professor;
        $college = $course->college;

        $file_path = 'professors/'.$professor->user->name;

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
    public function edit($id)
    {
        //

        if (auth()->user()->type == 'PROFESSOR')
        {
            $course = Course::find($id);
            $colleges = College::all();
            $professors = Professor::all();

            $context =
                [
                    'course' => $course,
                    'professors' => $professors,
                    'colleges' => $colleges,
                ];
            return view('courses.edit')->with($context);
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoursesRequest $request, $id)
    {
        $course = Course::find($id);

        $name = $request->input('name');
        $desc = $request->input('name');
        $professor = Professor::find($request->input('professor_id'));
        $college = College::find($request->input('college_id'));

        if($request->hasFile('picture'))
        {
            // Get file name with the extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
            $path = $request->file('picture')->storeAs("public/courses/$course->name/cover_image", $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'mfge.jpg';
        }

        $course->name = $name;
        $course->desc = $desc;
        $course->professor_id = $professor->user_id;
        $course->college_id = $college->id;
        $course->picture = $fileNameToStore;
        $course->save();

        return redirect(route('courses.show', $id));
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
