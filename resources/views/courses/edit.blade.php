@extends('layouts.base')

@section('title', 'Editing ' . $course->name)

@section('content')
    {{!! Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}}
    {{ Form::close() }}
@endsection
