@extends('layouts.base')

@section('title', 'Editing ' . $course->name)

@section('content')
    {{--{{ Form::open(['action' => ['CoursesController@update', [$course->professor_id, $course->college_id]], 'method' => 'post','enctype' => 'multipart/form-data']) }}
    {{ Form::close() }}--}}
@endsection
