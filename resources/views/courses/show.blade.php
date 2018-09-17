@extends('layouts.base')

@section('title', $course->name)

@section('header-image', asset('img/banner1.jpg'))

@section('banner-title', 'College of ' . $course->name)

@section('content')
    @include('comp.page-header')
    @include('comp.single-course')
@endsection
