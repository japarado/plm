<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colleges = $this->getColleges();
        $context = ['colleges' => $colleges];

        return view('pages.index')->with($context);
    }
}
