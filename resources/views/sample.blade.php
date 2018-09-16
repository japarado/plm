@extends('layouts.base')

@section('title','Sample Page')

@section('content')
    <img src="{{ asset($x->picture)  }}">
@endsection