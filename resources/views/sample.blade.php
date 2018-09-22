@extends('layouts.base')

@section('title','Sample Page')

@section('content')
    {{ Form::open(array('route' => 'colleges.create')) }}
    <div class="form-group">
        {{ Form::label('name', 'College Name') }}
        {{ Form::email('email') }}
    </div>
    {{ Form::close() }}
    @csrf
@endsection
