@extends('layouts.base')

@section('title', 'Editing ' . $course->name)

@section('content')
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST','enctype' => 'multipart/form-data']) }}
        @csrf
        <div class="form-group">
            {{ Form::label('name', 'College Name') }}
            {{ Form::text('name', 'School of Computing') }}
        </div>
        {{ Form::close() }}
    </div>
@endsection
